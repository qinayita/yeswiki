const AVAILABLE_LOCALES = ['fr'] // replace by ['fr', 'en'] when english documentation is available
// replace by ['fr', 'en', 'es'] when english and spannish documentations are available
const FALLBACK_LOCALE = 'fr'// do not change it
if (!AVAILABLE_LOCALES.includes(locale)) locale = FALLBACK_LOCALE

window.$docsify = {
  themeColor: '#1a89a0',
  loadSidebar: true,
  loadNavbar: true,
  subMaxLevel: 3,
  topMargin: 70,
  relativePath: true,
  auto2top: true,
  alias: {
    '.*/_sidebar.md': `/docs/${locale}/_sidebar.md`, // set default _sidebar.md to locale language
    '.*/_navbar.md': `/docs/${locale}/_navbar.md` // set default _navbar.md to locale language
  },
  search: {
    // maxAge: 0, // when developing, override cache by setting maxAge to 0. Also you need to clear your localStorage
    placeholder: {
      '/docs/fr/': 'Rechercher...',
      '/': 'Search...' // default to English
    },
    noData: {
      '/docs/fr/': 'Pas de résultats',
      '/': 'No results' // default to English
    },
    namespace: 'yeswiki-doc',
    depth: 3 // which parent title to display in the search result
  },
  copyCode: {
    buttonText: {
      '/docs/fr/': 'Copier le code',
      '/': 'Copy to clipboard' // default to English
    },
    errorText: 'Error',
    successText: {
      '/docs/fr/': 'Copié',
      '/': 'Copied' // default to English
    }
  },
  plugins: [
    function(hook, vm) {
      hook.afterEach((html) => {
        // Lazy load images and iframes
        html = html.replace(/<img src=([^\s]*)/g, '<img class="lazyload" data-src=$1')
        html = html.replace(/<iframe(.*) src=([^\s]*)/g, '<iframe$1 class="lazyload" data-src=$2')

        // Adds footer
        if (vm.route.file.match(/^docs\/.*$/)) {
          const url = `https://github.com/YesWiki/yeswiki/edit/doryphore-dev/${vm.route.file}`
          const footer = `
            <hr/>
            <footer>
              <a href="${url}" target="_blank">${i18n.DOC_EDIT_THIS_PAGE_ON_GITHUB}</a>
            </footer>`
          html += footer
        }

        return html
      })

      hook.doneEach(() => {
        // Adds code preview when requested
        // ```yeswiki preview
        // {{button}}
        // `̀`
        const yeswikiCodes = document.querySelectorAll('pre[data-lang^="yeswiki"]')
        yeswikiCodes.forEach((preDom) => {
          const data = preDom.getAttribute('data-lang')
          preDom.setAttribute('data-lang', data.split(' ')[0])
          if (data.includes('preview')) {
            const height = data.split('preview=')[1] || 200
            const codeDom = preDom.querySelector('code')
            const code = codeDom.textContent
            let url = `${baseUrl}wiki/render`
            url += url.includes('?') ? '&' : '?'
            url += `content=${encodeURIComponent(code)}`
            const preview = document.createElement('div')
            preview.innerHTML = `<iframe class="code-preview" src="${url}" width="100%" height="${height}" frameborder="0"></iframe>`
            insertAfter(preDom, preview.firstChild)
          }
        })

        // We need to do it each time cause the `nav` element is dyanmically replaced by the content of
        // `_navbar.md` each time we navigates to a new page
        initCustomNavMenu()
      })

      hook.ready(() => {
        // Redirect properly to home page, otherwise we stay on "#/" hash
        // and it cause some translations issues
        if (location.hash == '#/') location.hash = `/docs/${locale}/README`

        // adds backdrop for mobile search menu
        const backdrop = document.createElement('div')
        backdrop.classList = 'backdrop'
        backdrop.addEventListener('click', () => {
          document.querySelector('aside').classList.remove('open')
        })
        document.querySelector('main').appendChild(backdrop)
      })
    }
  ]
}

function insertAfter(referenceNode, newNode) {
  referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling)
}

// Handle browser back navigation, not handled by hook.doneEach
window.addEventListener('hashchange', () => {
  setTimeout(() => {
    initCustomNavMenu()
  }, 0)
})

// Improve navbar menu by adding mobile icons and auto fixing the "back to my wiki" url
function initCustomNavMenu() {
  // Do not run this method twice
  if (document.querySelector('nav .search-icon')) return

  // search icon
  const searchIcon = document.createElement('div')
  searchIcon.innerHTML = "<i class='gg-search'></i>"
  searchIcon.classList = 'search-icon'
  searchIcon.addEventListener('click', () => {
    document.querySelector('aside').classList.toggle('open')
    document.querySelector('nav > ul').classList.remove('open')
    document.querySelector('.menu-icon').classList.remove('open')
  })
  document.querySelector('nav').appendChild(searchIcon)

  // menu icon
  const menuIcon = document.createElement('div')
  menuIcon.innerHTML = "<i class='gg-menu'></i><i class='gg-close'></i>"
  menuIcon.classList = 'menu-icon'
  menuIcon.addEventListener('click', function() {
    document.querySelector('nav > ul').classList.toggle('open')
    this.classList.toggle('open')
  })
  document.querySelector('nav').appendChild(menuIcon)

  // Back button url correct
  const backBtn = document.querySelector('#back')
  if (backBtn) {
    backBtn.href = baseUrl
    const backBtnClone = backBtn.cloneNode(true)
    const li = document.createElement('li')
    li.appendChild(backBtnClone)
    const nav = document.querySelector('nav > ul')
    nav.insertBefore(li, nav.children[0])
  }

  // extensions menu
  const element = document.getElementById('extensions-links')
  if (element) {
    if (extensions.length > 0) {
      element.removeAttribute('href')
      const list = document.createElement('ul')
      let html = ''
      extensions.forEach((ext) => {
        html += `<li><a href="#/${ext.docPath}">${ext.name}</a></li>`
      })
      list.innerHTML = html
      element.parentNode.appendChild(list)
    } else {
      element.parentNode.parentNode.removeChild(element.parentNode)
    }
  }
}
