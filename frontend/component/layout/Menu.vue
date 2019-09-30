<template>
  <!-- prettier-ignore -->
  <client-only>
    <vue-navigation-bar :options="navbarOptions" />
  </client-only>
</template>

<script>
import VueNavigationBar from 'vue-navigation-bar'

export default {
  name: 'Menu',
  components: { VueNavigationBar },
  data() {
    return {
      navbarOptions: {
        elementId: 'main-navbar',
        isUsingVueRouter: true,
        mobileBreakpoint: 992,
        brandImagePath: './',
        brandImage: require('@/assets/hamza_name_logo.png'),
        brandImageAltText: 'Hamza',
        showBrandImageInMobilePopup: true,
        ariaLabelMainNav: 'Main Navigation',
        tooltipAnimationType: 'shift-away',
        menuOptionsLeft: [
          {
            type: 'image'
          }
        ],
        menuOptionsRight: [
          {
            type: 'link',
            text: 'Comparisons',
            subMenuOptions: [
              {
                type: 'link',
                text: 'Databases',
                subText: 'SQL, NoSQL',
                isUsingVueRouter: true,
                iconLeft: '<i class="fa fa-star fa-fw"></i>'
              },
              {
                type: 'link',
                text: 'Languages',
                subText: 'PHP, Javascript, Python, Go, C++',
                isUsingVueRouter: true,
                iconLeft: '<i class="fa fa-star fa-fw"></i>'
              },
              {
                type: 'link',
                text: 'Search Engines',
                subText: 'Comparisons in data types and engines',
                isUsingVueRouter: true,
                iconLeft: '<i class="fa fa-star fa-fw"></i>'
              },
              {
                type: 'link',
                text: 'Message Brokers',
                subText: 'Comparisons in data types and engines',
                isUsingVueRouter: true,
                iconLeft: '<i class="fa fa-star fa-fw"></i>'
              }
            ]
          },
          {
            type: 'link',
            text: 'Software Architecture',
            subMenuOptions: [
              {
                type: 'link',
                text: 'Enterprise patterns'
                // path: '/software-architecture'
              },
              {
                type: 'link',
                text: 'Software patterns'
                // path: '/software-architecture'
              },
              {
                type: 'link',
                text: 'Design Patterns'
                // path: '/software-architecture'
              }
              // {
              //   type: 'link',
              //   text: 'Reception',
              //   path: './reception',
              //   iconLeft:
              //     '<svg id="i-telephone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"> <path d="M3 12 C3 5 10 5 16 5 22 5 29 5 29 12 29 20 22 11 22 11 L10 11 C10 11 3 20 3 12 Z M11 14 C11 14 6 19 6 28 L26 28 C26 19 21 14 21 14 L11 14 Z" /> <circle cx="16" cy="21" r="4" /> </svg>'
              // }
            ]
          },
          {
            type: 'link',
            text: 'Roadmap steps',
            subMenuOptions: [
              {
                type: 'link',
                text: 'language'
              },
              {
                type: 'link',
                text: 'framework'
              },
              {
                type: 'link',
                text: 'other'
              }
            ]
          },
          {
            type: 'link',
            text: 'Algorithms',
            subMenuOptions: []
          },
          {
            type: 'link',
            text: 'Books read',
            subMenuOptions: []
          }
        ]
      }
    }
  }
}
</script>
