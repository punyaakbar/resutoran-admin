// Custom scripts

$(document).ready(function () {
  // sidebar menu trigger
  $sidebar = $('nav#admin-dashboard-sidebar')
  $mainContent = $('main#content')
  $sidebarTrigger = $('i#sidebar-trigger')

  $sidebarTrigger.click(function () {
    if ($sidebar.hasClass('sidebar-open')) {
      $sidebar.removeClass('sidebar-open')
    } else {
      $sidebar.addClass('sidebar-open')
    }
  })

  $mainContent.click(function () {
    if ($sidebar.hasClass('sidebar-open')) {
      $sidebarTrigger.click()
    }
  })

  // account dropdown trigger
  $headerAccountPicture = $('.header-account-pict')
  $accountPictureDropdown = $('.account-pict-dropdown')

  $headerAccountPicture.click(function () {
    if ($accountPictureDropdown.hasClass('d-none')) {
      $accountPictureDropdown.removeClass('d-none')
    } else {
      $accountPictureDropdown.addClass('d-none')
    }
  })

  // menu active
  $myPath = location.pathname.split('/')
  if ($myPath[2] == '') {
    $('li#home').addClass('active')
  } else {
    active = 'li#' + $myPath[2]
    $(active).addClass('active')
  }

  // add footer to main dashboard
  $('main.dashboard-content').append($('footer.dashboard-footer'))
})
