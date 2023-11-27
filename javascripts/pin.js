const PinHelper = {
  propertyName: 'https://yeswiki.net/vocabulary/pinned',

  updateElem(elem, mode, withMessage = true) {
    if (mode === 'add') {
      $(elem).addClass('user-pinned');
      $(elem).find('i')
        .removeClass('far fa-thumbtack')
        .addClass('fas fa-thumbtack');
      $(elem).tooltip('destroy');
      $(elem).attr('title', _t('PINNED_REMOVE'));
      $(elem).removeData('original-title');
      if (withMessage) {
        toastMessage(
          _t('PINNED_ADDED'),
          3000,
          'alert alert-success'
        );
      }
    } else if (mode === 'delete') {
      $(elem).removeClass('user-pinned');
      $(elem).find('i')
        .removeClass('fas fa-thumbtack')
        .addClass('far fa-thumbtack');
      $(elem).tooltip('destroy');
      $(elem).attr('title', _t('PINNED_ADD'));
      $(elem).removeData('original-title');
      if (withMessage) {
        toastMessage(
          _t('PINNED_REMOVED'),
          3000,
          'alert alert-warning'
        );
      }
    }
  },

  addPin(resource, user, elem) {
    $.ajax({
      method: 'POST',
      url: wiki.url(`?api/triples/${resource}`),
      data: {
        property: this.propertyName,
        user
      },
      success: () => {
        this.updateElem(elem, 'add');
      },
      error: (xhr, status, error) => {
        toastMessage(
          _t('PINNED_ERROR', { error }),
          3000,
          'alert alert-danger'
        );
      }
    });
  },

  deletePin(resource, user, elem) {
    $.ajax({
      method: 'POST',
      url: wiki.url(`?api/triples/${resource}/delete`),
      data: {
        property: this.propertyName,
        user
      },
      success: () => {
        this.updateElem(elem, 'delete');
      },
      error: (xhr, status, error) => {
        toastMessage(
          _t('PINNED_ERROR', { error }),
          3000,
          'alert alert-danger'
        );
      }
    });
  },

  managePins(event) {
    event.preventDefault();
    let target = event.target;
    if (target.tagName === 'I') {
      target = $(target).parent();
    }
    const resource = $(target).data('resource');
    const user = $(target).data('user');
    if ($(target).hasClass('user-pinned')) {
      this.deletePin(resource, user, target);
    } else {
      this.addPin(resource, user, target);
    }
  },

  init() {
    $('a.pinned').off('click').on('click', this.managePins.bind(this));
    $(document).on('yw-modal-open', () => {
      $('a.pinned:not(.eventSet)').addClass('eventSet').on('click', this.managePins.bind(this));
    });
  }
};

PinHelper.init();
