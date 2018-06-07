/* exported getSearchBox closeSearch */
/*eslint no-console: ["error", { allow: ["warn", "log"] }] */

/**
 * WHEN CLICK SEARCH ICON
 */
function getSearchBox() {
  jQuery('#search-icon').hide();
  jQuery('#search-container')
    .css('display', 'inline-block')
    .find('.w-tb')
    .focus();
}

function closeSearch() {
  jQuery('#search-container')
    .find('.w-tb')
    .val('');
  jQuery('#search-container').hide();
  jQuery('#search-icon').css('display', 'inline-block');
}

function goDarkTheme() {
  jQuery('body').addClass('night-theme');
  jQuery('#night_time').hide();
  jQuery('#day_time').show();
}

function goLightTheme() {
  jQuery('body').removeClass('night-theme');
  jQuery('#night_time').show();
  jQuery('#day_time').hide();  
}

jQuery(document).ready(function() {
  /**
   * get theme settings from localforage
   * if exists add night-theme class to body
   */
  localforage.getItem('wt-enable-dark-theme').then(function(theme) {
    if (theme === 'dark') goDarkTheme();
    else goLightTheme();
  });

  /**
   * When theme switcher was clicked
   * add to localstorage when select dark mode
   * or remove it when select day mode
   */
  jQuery('.theme-switch-block a').on('click', function(e) {
    e.preventDefault();
    if (jQuery(this).attr('id') === 'night_time') {
      localforage.setItem('wt-enable-dark-theme', 'dark').then(function(theme) {
        goDarkTheme();
      });
    } else {
      localforage.removeItem('wt-enable-dark-theme').then(function() {
        goLightTheme();
      });
    }
  });

  /**
   * ADD ARROW TO PARENT CATE
   * VERSION 1.0
   */
  var list = jQuery('.site-navigation')
    .find('ul')
    .find('li')
    .find('ul');
  list.each(function() {
    var parent = list
      .parents('li')
      .find('a')
      .first();
    var arrow = ' <span class="icon-arrow-down"></span>';
    parent.html(parent.text() + arrow);
  });
  /**
   * APPEND SEARCH TO NAV
   * VERSION 1.0
   */
  jQuery('.site-navigation > ul').append(
    '<li class="menu-item" id="search-icon"><a href="javascript:getSearchBox()"><span class="icon-search"></span></a></li>'
  );
  jQuery('.site-navigation > ul').append(jQuery('#search-container'));
  /**
   * NAV MENU - MOBILE HACK
   * VERSION 1.0
   */
  if (jQuery(window).width() <= 1024) {
    jQuery('.site-navigation > ul')
      .find('li.menu-item-has-children')
      .on('click', function() {
        jQuery(this)
          .find('span')
          .toggleClass('icon-arrow-down')
          .toggleClass('icon-arrow-up');
        jQuery(this)
          .find('ul')
          .first()
          .toggle();
      });
  } else {
    jQuery('.site-navigation > ul')
      .find('li.menu-item-has-children')
      .first()
      .on('mouseenter', function() {
        jQuery(this).css('zIndex', 2);
        jQuery('.overlay-background').fadeIn(200);
      })
      .on('mouseleave', function() {
        jQuery(this).css('zIndex', 'initial');
        jQuery('.overlay-background').fadeOut(200);
      });
  }
  /**
   * ADD MAGNIFIC POPUP TO GALLERY
   * IF CONTENT HAV GALLERY SHORTCODE
   */
  if (jQuery('.gallery').length > 0) {
    jQuery('.gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
        enabled: true,
        navigateByImgClick: true
      }
    });
  }
  /**
   * IF HAVE TABLE IN THAT PAGE
   * VERSION 1.0
   */
  if (jQuery('table').length > 0) {
    jQuery('table').addClass('table-light');
  }
  /**
   * ADD HOLDER TO IFRAME, EMBED and object
   * TO MAKE THAT RESPONSIVE LAYOUT
   * VERSION 1.0
   */
  if (jQuery('iframe').length > 0) {
    jQuery('iframe').each(function() {
      jQuery(this).wrap("<div class='responsive-unit'></div>");
    });
  }
  console.log(
    '%cDeveloped and Maintained by JindaTheme :)',
    'font-size:14px; color: #e7a12e; font-weight: bold; font-family: Century Gothic, sans-serif;'
  ),
    console.log(
      '%cvisit us on http://www.jindatheme.com',
      'font-size:12px; color: #888888; font-family: Century Gothic, sans-serif;'
    );
});
jQuery(window).load(function() {
  /**
   * PRELOADING LAYOUT
   * VERSION 1.0
   */
  jQuery('.preloader-block').fadeOut();
  /**
   * ADD MATCHHEIGHT TO GRID VIEW
   * VERSION 1.0
   */
  if (jQuery('.grid-content-block').length > 0) {
    jQuery('.grid-content-block').matchHeight();
  }
});
