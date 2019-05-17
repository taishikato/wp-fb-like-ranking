<template>
  <section class="section">
    <div class="columns is-mobile has-text-centered">
      <section class="hero container">
        <div class="hero-body">
          <div>
            <h1 class="title is-1">
              WordPress Facebook Like Ranking
            </h1>
            <!-- <h2 class="subtitle">
              Hero subtitle
            </h2> -->
          </div>
        </div>
      </section>
    </div>
    <div class="content">
      <h2 class="title is-2">
        ⚡️ Total Download:
        <div class="totalCount">{{ totalDownload }}</div>
      </h2>
      <h2 class="title is-2">
        🤝 Usage
      </h2>
      <div v-html="$md.render(usage)"></div>
    </div>
    <footer class="footer has-text-centered">
      <p>
        <a
          class="title footer-link"
          href="https://wordpress.org/plugins/wp-facebook-like-ranking/"
          target="_blank"
        >
          Check on wordpress.org
        </a>
      </p>
      <p>
        <a
          class="title footer-link"
          href="https://github.com/taishikato/wp-fb-like-ranking"
          target="_blank"
        >
          Check on github.com
        </a>
      </p>
    </footer>
  </section>
</template>

<script>
import twemoji from 'twemoji'

export default {
  name: 'HomePage',
  async asyncData({ $axios }) {
    const result = await $axios('http://wptally.com/api/mankinjp', {
      params: {
        timeout: 3
      }
    })
    const totalDownload = result.data.plugins['wp-facebook-like-ranking'].downloads
    const { data } = await $axios.get(
      'https://raw.githubusercontent.com/taishikato/wp-fb-like-ranking/master/README.md'
    )
    const usage = data
    return { usage, totalDownload }
  },
  mounted() {
    twemoji.parse(document.body)
  }
}
</script>

<style lang="scss" scoped>
.totalCount {
  font-size: 50px;
  display: inline-block;
  position: relative;
}
.totalCount:before {
  content: '~~~~~~~';
  font-size: 0.6em;
  font-weight: 700;
  color: hsl(171, 100%, 41%);
  // font-family: Times New Roman, Serif;
  width: 100%;
  position: absolute;
  top: 34px;
  left: -1px;
  overflow: hidden;
}
.footer-link:hover {
  text-decoration: underline;
}
</style>
