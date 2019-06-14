import pkg from './package';

export default {
  mode: 'universal',

  router: {
    base: '/wp-fb-like-ranking/'
  },

  /*
   ** Headers of the page
   */
  head: {
    title: 'WordPress Facebook Like Ranking',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      {
        hid: 'description',
        name: 'description',
        content:
          "With this plugin, you can create a your posts' ranking sorted by the number of Facebook like."
      },
      {
        hid: 'title',
        name: 'title',
        content: 'WordPress Facebook Like Ranking'
      },
      {
        hid: 'keywords',
        name: 'keywords',
        content: 'wordpress,facebook,sort,like,reaction,ranking'
      },
      {
        hid: 'og:title',
        property: 'og:title',
        content: 'WordPress Facebook Like Ranking'
      },
      {
        hid: 'og:description',
        property: 'og:description',
        content:
          "With this plugin, you can create a your posts' ranking sorted by the number of Facebook like."
      },
      {
        hid: 'og:site_name',
        property: 'og:site_name',
        content: 'WordPress Facebook Like Ranking'
      },
      {
        hid: 'og:url',
        property: 'og:url',
        content: 'https://taishikato.github.io/wp-fb-like-ranking/'
      },
      {
        hid: 'og:image',
        property: 'og:image',
        content: 'https://taishikato.github.io/wp-fb-like-ranking/ogimage.png'
      }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
      {
        rel: 'stylesheet',
        href: 'https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap'
      }
    ]
  },

  /*
   ** Customize the progress-bar color
   */
  loading: { color: '#fff' },

  /*
   ** Global CSS
   */
  css: ['@/assets/css/bulma', '@/assets/css/main'],

  /*
   ** Plugins to load before mounting the App
   */
  plugins: [],

  /*
   ** Nuxt.js modules
   */
  modules: [
    // Doc: https://axios.nuxtjs.org/usage
    '@nuxtjs/axios',
    // Doc: https://buefy.github.io/#/documentation
    'nuxt-buefy',
    '@nuxtjs/markdownit',
    ['@nuxtjs/google-analytics', {
      id: 'UA-27648393-21'
    }]
  ],
  markdownit: {
    injected: true, // $mdを利用してmarkdownをhtmlにレンダリングする
    breaks: true, // 改行コードを<br>に変換する
    html: true, // HTML タグを有効にする
    linkify: true, // URLに似たテキストをリンクに自動変換する
    typography: true // 言語に依存しないきれいな 置換 + 引用符 を有効にします。
  },
  /*
   ** Axios module configuration
   */
  axios: {
    // See https://github.com/nuxt-community/axios-module#options
  },

  /*
   ** Build configuration
   */
  build: {
    /*
     ** You can extend webpack config here
     */
    extend(config, ctx) {
      // Run ESLint on save
      if (ctx.isDev && ctx.isClient) {
        config.module.rules.push({
          enforce: 'pre',
          test: /\.(js|vue)$/,
          loader: 'eslint-loader',
          exclude: /(node_modules)/
        });
      }
    }
  }
};
