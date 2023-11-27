function _t(message, replacements = {}) {
  let translation = typeof wiki !== 'undefined'
        && wiki.lang !== undefined
    ? (wiki.lang[message] ?? null) : null
  if (!translation) {
    translation = message
    if (typeof wiki !== 'undefined' && wiki.isDebugEnabled) {
      console.warn(`Translation was not found in wiki.lang for "${message}", (wiki.locale = ${wiki.locale})`)
    }
  }
  for (const key in replacements) {
    while (translation.includes(`{${key}}`)) {
      translation = translation.replace(`{${key}}`, replacements[key])
    }
  }
  return translation
}

var wiki = {
  ...((typeof wiki !== 'undefined') ? wiki : null),
  ...{
    url(url, params = {}) {
      let result = wiki.baseUrl + url
      result = result.replace('??', '?')
      stringParams = []
      for (const key in params) {
        stringParams.push(`${key}=${encodeURIComponent(params[key])}`)
      }
      if (stringParams.length) {
        result += result.includes('?') ? '&' : '?'
        result += stringParams.join('&')
      }
      return result
    },
    cssVar(varName) {
      return getComputedStyle(document.documentElement).getPropertyValue(varName)
    }
  }
}
