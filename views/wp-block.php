<!-- ryder -->
<style>
  #ryder-block > *:not(:first-child) {
    margin-block-start: 1.2rem;
    margin-block-end: 0;
  }

  #ryder-block p:not(:first-child) {
    margin-block-start: 1.2rem;
    margin-block-end: 0;
  }

  #ryder-block > * > p:not(:first-child) {
    margin-block-start: 0;
  }

  #ryder-block .is-nowrap{
    flex-wrap: nowrap;
  }
  @media (max-width: 1200px) {
    #ryder-block .is-nowrap{
      flex-wrap: wrap;
    }
  }

  figure.wp-block-image.aligncenter{
    img{
      margin-left: auto;
      margin-right: auto;
    }
  }

  figure.wp-block-image.alignright{
    img{
      margin-left: auto;
    }
  }

  #ryder-block .is-nowrap figure.wp-block-image:has(+ p){
    flex: none;
  }
  @media (max-width: 1200px) {
    #ryder-block .is-nowrap figure.wp-block-image{
      flex: auto !important;
    }
  }

  #ryder-block .wp-block-embed-youtube.wp-has-aspect-ratio{
    aspect-ratio: 16 / 9;
    width: 100%;
  }
  #ryder-block .wp-block-embed-youtube.wp-has-aspect-ratio .wp-block-embed__wrapper{
    height: 100%;
  }
  #ryder-block .wp-block-embed-youtube.wp-has-aspect-ratio iframe {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  #ryder-block .is-resized{
    flex-shrink: 0;
  }

  #ryder-block .size-full{
    width: auto;
    height: auto;
  }

  @media (max-width: 1200px) {
    /*#ryder-block :where(img[class*=wp-image-]) {
      height: auto !important;
    }*/
  }

  /*內嵌圖片改line*/
  #ryder-block p img{
    display: inline;
    vertical-align: bottom;
    margin: 0 10px;
  }

  #ryder-block a{
    text-decoration-line: underline;
  }

  /*table*/
  .wp-block-table table {
    border-collapse: collapse;
    width: 100%;
  }
  /*@media (max-width: 1200px) {
    .wp-block-table table {
      width: 900px;
    }
  }*/
  .wp-block-table td, .wp-block-table th {
    border: 1px solid;
    padding: .5em;
  }
  .wp-block-table.is-style-stripes td, .wp-block-table.is-style-stripes th {
    border-color: #0000;
  }
  .wp-block-table.is-style-stripes tbody tr:nth-child(odd) {
    background-color: #f0f0f0;
  }

  /*list  可能要依字大小調? */
  ul.wp-block-list{
    list-style: disc;
    padding-left: 1.4rem;
  }
  ol.wp-block-list{
    list-style: decimal;
    padding-left: 1.8rem;
  }
</style>


<!-- cover -->
<style>
  .wp-block-cover,.wp-block-cover-image {
    align-items: center;
    background-position: 50%;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    min-height: 430px;
    overflow: hidden;
    overflow: clip;
    padding: 1em;
    position: relative
  }

  .wp-block-cover .has-background-dim:not([class*=-background-color]),.wp-block-cover-image .has-background-dim:not([class*=-background-color]),.wp-block-cover-image.has-background-dim:not([class*=-background-color]),.wp-block-cover.has-background-dim:not([class*=-background-color]) {
    background-color: #000
  }

  .wp-block-cover .has-background-dim.has-background-gradient,.wp-block-cover-image .has-background-dim.has-background-gradient {
    background-color: initial
  }

  .wp-block-cover-image.has-background-dim:before,.wp-block-cover.has-background-dim:before {
    background-color: inherit;
    content: ""
  }

  .wp-block-cover .wp-block-cover__background,.wp-block-cover .wp-block-cover__gradient-background,.wp-block-cover-image .wp-block-cover__background,.wp-block-cover-image .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim:not(.has-background-gradient):before,.wp-block-cover.has-background-dim:not(.has-background-gradient):before {
    bottom: 0;
    left: 0;
    opacity: .5;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 1
  }

  .wp-block-cover-image.has-background-dim.has-background-dim-10 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-10 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-10:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-10 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-10 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-10:not(.has-background-gradient):before {
    opacity: .1
  }

  .wp-block-cover-image.has-background-dim.has-background-dim-20 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-20 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-20:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-20 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-20 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-20:not(.has-background-gradient):before {
    opacity: .2
  }

  .wp-block-cover-image.has-background-dim.has-background-dim-30 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-30 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-30:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-30 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-30 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-30:not(.has-background-gradient):before {
    opacity: .3
  }

  .wp-block-cover-image.has-background-dim.has-background-dim-40 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-40 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-40:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-40 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-40 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-40:not(.has-background-gradient):before {
    opacity: .4
  }

  .wp-block-cover-image.has-background-dim.has-background-dim-50 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-50 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-50:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-50 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-50 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-50:not(.has-background-gradient):before {
    opacity: .5
  }

  .wp-block-cover-image.has-background-dim.has-background-dim-60 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-60 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-60:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-60 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-60 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-60:not(.has-background-gradient):before {
    opacity: .6
  }

  .wp-block-cover-image.has-background-dim.has-background-dim-70 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-70 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-70:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-70 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-70 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-70:not(.has-background-gradient):before {
    opacity: .7
  }

  .wp-block-cover-image.has-background-dim.has-background-dim-80 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-80 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-80:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-80 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-80 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-80:not(.has-background-gradient):before {
    opacity: .8
  }

  .wp-block-cover-image.has-background-dim.has-background-dim-90 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-90 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-90:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-90 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-90 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-90:not(.has-background-gradient):before {
    opacity: .9
  }

  .wp-block-cover-image.has-background-dim.has-background-dim-100 .wp-block-cover__background,.wp-block-cover-image.has-background-dim.has-background-dim-100 .wp-block-cover__gradient-background,.wp-block-cover-image.has-background-dim.has-background-dim-100:not(.has-background-gradient):before,.wp-block-cover.has-background-dim.has-background-dim-100 .wp-block-cover__background,.wp-block-cover.has-background-dim.has-background-dim-100 .wp-block-cover__gradient-background,.wp-block-cover.has-background-dim.has-background-dim-100:not(.has-background-gradient):before {
    opacity: 1
  }

  .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-0,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-0,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-0,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-0 {
    opacity: 0
  }

  .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-10,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-10,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-10,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-10 {
    opacity: .1
  }

  .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-20,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-20,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-20,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-20 {
    opacity: .2
  }

  .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-30,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-30,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-30,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-30 {
    opacity: .3
  }

  .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-40,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-40,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-40,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-40 {
    opacity: .4
  }

  .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-50,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-50,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-50,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-50 {
    opacity: .5
  }

  .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-60,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-60,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-60,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-60 {
    opacity: .6
  }

  .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-70,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-70,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-70,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-70 {
    opacity: .7
  }

  .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-80,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-80,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-80,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-80 {
    opacity: .8
  }

  .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-90,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-90,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-90,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-90 {
    opacity: .9
  }

  .wp-block-cover .wp-block-cover__background.has-background-dim.has-background-dim-100,.wp-block-cover .wp-block-cover__gradient-background.has-background-dim.has-background-dim-100,.wp-block-cover-image .wp-block-cover__background.has-background-dim.has-background-dim-100,.wp-block-cover-image .wp-block-cover__gradient-background.has-background-dim.has-background-dim-100 {
    opacity: 1
  }

  .wp-block-cover-image.alignleft,.wp-block-cover-image.alignright,.wp-block-cover.alignleft,.wp-block-cover.alignright {
    max-width: 420px;
    width: 100%
  }

  .wp-block-cover-image.aligncenter,.wp-block-cover-image.alignleft,.wp-block-cover-image.alignright,.wp-block-cover.aligncenter,.wp-block-cover.alignleft,.wp-block-cover.alignright {
    display: flex
  }

  .wp-block-cover .wp-block-cover__inner-container,.wp-block-cover-image .wp-block-cover__inner-container {
    color: inherit;
    width: 100%;
    z-index: 1
  }

  .wp-block-cover-image.is-position-top-left,.wp-block-cover.is-position-top-left {
    align-items: flex-start;
    justify-content: flex-start
  }

  .wp-block-cover-image.is-position-top-center,.wp-block-cover.is-position-top-center {
    align-items: flex-start;
    justify-content: center
  }

  .wp-block-cover-image.is-position-top-right,.wp-block-cover.is-position-top-right {
    align-items: flex-start;
    justify-content: flex-end
  }

  .wp-block-cover-image.is-position-center-left,.wp-block-cover.is-position-center-left {
    align-items: center;
    justify-content: flex-start
  }

  .wp-block-cover-image.is-position-center-center,.wp-block-cover.is-position-center-center {
    align-items: center;
    justify-content: center
  }

  .wp-block-cover-image.is-position-center-right,.wp-block-cover.is-position-center-right {
    align-items: center;
    justify-content: flex-end
  }

  .wp-block-cover-image.is-position-bottom-left,.wp-block-cover.is-position-bottom-left {
    align-items: flex-end;
    justify-content: flex-start
  }

  .wp-block-cover-image.is-position-bottom-center,.wp-block-cover.is-position-bottom-center {
    align-items: flex-end;
    justify-content: center
  }

  .wp-block-cover-image.is-position-bottom-right,.wp-block-cover.is-position-bottom-right {
    align-items: flex-end;
    justify-content: flex-end
  }

  .wp-block-cover-image.has-custom-content-position.has-custom-content-position .wp-block-cover__inner-container,.wp-block-cover.has-custom-content-position.has-custom-content-position .wp-block-cover__inner-container {
    margin: 0
  }

  .wp-block-cover-image.has-custom-content-position.has-custom-content-position.is-position-bottom-left .wp-block-cover__inner-container,.wp-block-cover-image.has-custom-content-position.has-custom-content-position.is-position-bottom-right .wp-block-cover__inner-container,.wp-block-cover-image.has-custom-content-position.has-custom-content-position.is-position-center-left .wp-block-cover__inner-container,.wp-block-cover-image.has-custom-content-position.has-custom-content-position.is-position-center-right .wp-block-cover__inner-container,.wp-block-cover-image.has-custom-content-position.has-custom-content-position.is-position-top-left .wp-block-cover__inner-container,.wp-block-cover-image.has-custom-content-position.has-custom-content-position.is-position-top-right .wp-block-cover__inner-container,.wp-block-cover.has-custom-content-position.has-custom-content-position.is-position-bottom-left .wp-block-cover__inner-container,.wp-block-cover.has-custom-content-position.has-custom-content-position.is-position-bottom-right .wp-block-cover__inner-container,.wp-block-cover.has-custom-content-position.has-custom-content-position.is-position-center-left .wp-block-cover__inner-container,.wp-block-cover.has-custom-content-position.has-custom-content-position.is-position-center-right .wp-block-cover__inner-container,.wp-block-cover.has-custom-content-position.has-custom-content-position.is-position-top-left .wp-block-cover__inner-container,.wp-block-cover.has-custom-content-position.has-custom-content-position.is-position-top-right .wp-block-cover__inner-container {
    margin: 0;
    width: auto
  }

  .wp-block-cover .wp-block-cover__image-background,.wp-block-cover video.wp-block-cover__video-background,.wp-block-cover-image .wp-block-cover__image-background,.wp-block-cover-image video.wp-block-cover__video-background {
    border: none;
    bottom: 0;
    box-shadow: none;
    height: 100%;
    left: 0;
    margin: 0;
    max-height: none;
    max-width: none;
    object-fit: cover;
    outline: none;
    padding: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%
  }

  .wp-block-cover-image.has-parallax,.wp-block-cover.has-parallax,.wp-block-cover__image-background.has-parallax,video.wp-block-cover__video-background.has-parallax {
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover
  }

  @supports (-webkit-touch-callout:inherit) {
    .wp-block-cover-image.has-parallax,.wp-block-cover.has-parallax,.wp-block-cover__image-background.has-parallax,video.wp-block-cover__video-background.has-parallax {
      background-attachment: scroll
    }
  }

  @media (prefers-reduced-motion:reduce) {
    .wp-block-cover-image.has-parallax,.wp-block-cover.has-parallax,.wp-block-cover__image-background.has-parallax,video.wp-block-cover__video-background.has-parallax {
      background-attachment: scroll
    }
  }

  .wp-block-cover-image.is-repeated,.wp-block-cover.is-repeated,.wp-block-cover__image-background.is-repeated,video.wp-block-cover__video-background.is-repeated {
    background-repeat: repeat;
    background-size: auto
  }

  .wp-block-cover__image-background,.wp-block-cover__video-background {
    z-index: 0
  }

  .wp-block-cover-image-text,.wp-block-cover-image-text a,.wp-block-cover-image-text a:active,.wp-block-cover-image-text a:focus,.wp-block-cover-image-text a:hover,.wp-block-cover-text,.wp-block-cover-text a,.wp-block-cover-text a:active,.wp-block-cover-text a:focus,.wp-block-cover-text a:hover,section.wp-block-cover-image h2,section.wp-block-cover-image h2 a,section.wp-block-cover-image h2 a:active,section.wp-block-cover-image h2 a:focus,section.wp-block-cover-image h2 a:hover {
    color: #fff
  }

  .wp-block-cover-image .wp-block-cover.has-left-content {
    justify-content: flex-start
  }

  .wp-block-cover-image .wp-block-cover.has-right-content {
    justify-content: flex-end
  }

  .wp-block-cover-image.has-left-content .wp-block-cover-image-text,.wp-block-cover.has-left-content .wp-block-cover-text,section.wp-block-cover-image.has-left-content>h2 {
    margin-left: 0;
    text-align: left
  }

  .wp-block-cover-image.has-right-content .wp-block-cover-image-text,.wp-block-cover.has-right-content .wp-block-cover-text,section.wp-block-cover-image.has-right-content>h2 {
    margin-right: 0;
    text-align: right
  }

  .wp-block-cover .wp-block-cover-text,.wp-block-cover-image .wp-block-cover-image-text,section.wp-block-cover-image>h2 {
    font-size: 2em;
    line-height: 1.25;
    margin-bottom: 0;
    max-width: 840px;
    padding: .44em;
    text-align: center;
    z-index: 1
  }

  :where(.wp-block-cover-image:not(.has-text-color)),:where(.wp-block-cover:not(.has-text-color)) {
    color: #fff
  }

  :where(.wp-block-cover-image.is-light:not(.has-text-color)),:where(.wp-block-cover.is-light:not(.has-text-color)) {
    color: #000
  }

  :root :where(.wp-block-cover h1:not(.has-text-color)),:root :where(.wp-block-cover h2:not(.has-text-color)),:root :where(.wp-block-cover h3:not(.has-text-color)),:root :where(.wp-block-cover h4:not(.has-text-color)),:root :where(.wp-block-cover h5:not(.has-text-color)),:root :where(.wp-block-cover h6:not(.has-text-color)),:root :where(.wp-block-cover p:not(.has-text-color)) {
    color: inherit
  }
</style>


<!-- blocks -> gallery -->
<style>
  .blocks-gallery-grid:not(.has-nested-images),.wp-block-gallery:not(.has-nested-images) {
    display: flex;
    flex-wrap: wrap;
    list-style-type: none;
    margin: 0;
    padding: 0
  }

  .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    justify-content: center;
    margin: 0 1em 1em 0;
    position: relative;
    width: calc(50% - 1em)
  }

  .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image:nth-of-type(2n),.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item:nth-of-type(2n) {
    margin-right: 0
  }

  .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figure,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figure,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figure,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figure {
    align-items: flex-end;
    display: flex;
    height: 100%;
    justify-content: flex-start;
    margin: 0
  }

  .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image img,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item img {
    display: block;
    height: auto;
    max-width: 100%;
    width: auto
  }

  .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figcaption,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figcaption,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figcaption,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figcaption {
    background: linear-gradient(0deg,#000000b3,#0000004d 70%,#0000);
    bottom: 0;
    box-sizing: border-box;
    color: #fff;
    font-size: .8em;
    margin: 0;
    max-height: 100%;
    overflow: auto;
    padding: 3em .77em .7em;
    position: absolute;
    text-align: center;
    width: 100%;
    z-index: 2
  }

  .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figcaption img,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figcaption img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figcaption img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figcaption img {
    display: inline
  }

  .blocks-gallery-grid:not(.has-nested-images) figcaption,.wp-block-gallery:not(.has-nested-images) figcaption {
    flex-grow: 1
  }

  .blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-image a,.blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-image img,.blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-item a,.blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-item img,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-image a,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-image img,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-item a,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-item img {
    flex: 1;
    height: 100%;
    object-fit: cover;
    width: 100%
  }

  .blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-item {
    margin-right: 0;
    width: 100%
  }

  @media (min-width: 600px) {
    .blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-item {
      margin-right:1em;
      width: calc(33.33333% - .66667em)
    }

    .blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-item {
      margin-right: 1em;
      width: calc(25% - .75em)
    }

    .blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-item {
      margin-right: 1em;
      width: calc(20% - .8em)
    }

    .blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-item {
      margin-right: 1em;
      width: calc(16.66667% - .83333em)
    }

    .blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-item {
      margin-right: 1em;
      width: calc(14.28571% - .85714em)
    }

    .blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-item {
      margin-right: 1em;
      width: calc(12.5% - .875em)
    }

    .blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-image:nth-of-type(1n),.blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-item:nth-of-type(1n),.blocks-gallery-grid:not(.has-nested-images).columns-2 .blocks-gallery-image:nth-of-type(2n),.blocks-gallery-grid:not(.has-nested-images).columns-2 .blocks-gallery-item:nth-of-type(2n),.blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-image:nth-of-type(3n),.blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-item:nth-of-type(3n),.blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-image:nth-of-type(4n),.blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-item:nth-of-type(4n),.blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-image:nth-of-type(5n),.blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-item:nth-of-type(5n),.blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-image:nth-of-type(6n),.blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-item:nth-of-type(6n),.blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-image:nth-of-type(7n),.blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-item:nth-of-type(7n),.blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-image:nth-of-type(8n),.blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-item:nth-of-type(8n),.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-image:nth-of-type(1n),.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-item:nth-of-type(1n),.wp-block-gallery:not(.has-nested-images).columns-2 .blocks-gallery-image:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images).columns-2 .blocks-gallery-item:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-image:nth-of-type(3n),.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-item:nth-of-type(3n),.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-image:nth-of-type(4n),.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-item:nth-of-type(4n),.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-image:nth-of-type(5n),.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-item:nth-of-type(5n),.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-image:nth-of-type(6n),.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-item:nth-of-type(6n),.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-image:nth-of-type(7n),.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-item:nth-of-type(7n),.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-image:nth-of-type(8n),.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-item:nth-of-type(8n) {
      margin-right: 0
    }
  }

  .blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image:last-child,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item:last-child,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image:last-child,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item:last-child {
    margin-right: 0
  }

  .blocks-gallery-grid:not(.has-nested-images).alignleft,.blocks-gallery-grid:not(.has-nested-images).alignright,.wp-block-gallery:not(.has-nested-images).alignleft,.wp-block-gallery:not(.has-nested-images).alignright {
    max-width: 420px;
    width: 100%
  }

  .blocks-gallery-grid:not(.has-nested-images).aligncenter .blocks-gallery-item figure,.wp-block-gallery:not(.has-nested-images).aligncenter .blocks-gallery-item figure {
    justify-content: center
  }

  .wp-block-gallery:not(.is-cropped) .blocks-gallery-item {
    align-self: flex-start
  }

  figure.wp-block-gallery.has-nested-images {
    align-items: normal
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image:not(#individual-image) {
    margin: 0;
    width: calc(49% - var(--wp--style--unstable-gallery-gap, 16px)/2)
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image {
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    justify-content: center;
    max-width: 100%;
    position: relative
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image>a,.wp-block-gallery.has-nested-images figure.wp-block-image>div {
    flex-direction: column;
    flex-grow: 1;
    margin: 0
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image img {
    display: block;
    height: auto;
    max-width: 100%!important;
    width: auto
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image figcaption {
    background: linear-gradient(0deg,#000000b3,#0000004d 70%,#0000);
    bottom: 0;
    box-sizing: border-box;
    color: #fff;
    font-size: 13px;
    left: 0;
    margin-bottom: 0;
    max-height: 60%;
    overflow: auto;
    padding: 0 8px 8px;
    position: absolute;
    scrollbar-color: #0000 #0000;
    scrollbar-gutter: stable both-edges;
    scrollbar-width: thin;
    text-align: center;
    width: 100%;
    will-change: transform
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image figcaption::-webkit-scrollbar {
    height: 12px;
    width: 12px
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image figcaption::-webkit-scrollbar-track {
    background-color: initial
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image figcaption::-webkit-scrollbar-thumb {
    background-clip: padding-box;
    background-color: initial;
    border: 3px solid #0000;
    border-radius: 8px
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image figcaption:focus-within::-webkit-scrollbar-thumb,.wp-block-gallery.has-nested-images figure.wp-block-image figcaption:focus::-webkit-scrollbar-thumb,.wp-block-gallery.has-nested-images figure.wp-block-image figcaption:hover::-webkit-scrollbar-thumb {
    background-color: #fffc
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image figcaption:focus,.wp-block-gallery.has-nested-images figure.wp-block-image figcaption:focus-within,.wp-block-gallery.has-nested-images figure.wp-block-image figcaption:hover {
    scrollbar-color: #fffc #0000
  }

  @media (hover: none) {
    .wp-block-gallery.has-nested-images figure.wp-block-image figcaption {
      scrollbar-color:#fffc #0000
    }
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image figcaption img {
    display: inline
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image figcaption a {
    color: inherit
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border img {
    box-sizing: border-box
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border>a,.wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border>div,.wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded>a,.wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded>div {
    flex: 1 1 auto
  }

  .wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border figcaption,.wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded figcaption {
    background: none;
    color: inherit;
    flex: initial;
    margin: 0;
    padding: 10px 10px 9px;
    position: relative
  }

  .wp-block-gallery.has-nested-images figcaption {
    flex-basis: 100%;
    flex-grow: 1;
    text-align: center
  }

  .wp-block-gallery.has-nested-images:not(.is-cropped) figure.wp-block-image:not(#individual-image) {
    margin-bottom: auto;
    margin-top: 0
  }

  .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) {
    align-self: inherit
  }

  .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image)>a,.wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image)>div:not(.components-drop-zone) {
    display: flex
  }

  .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) a,.wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) img {
    flex: 1 0 0%;
    height: 100%;
    object-fit: cover;
    width: 100%
  }

  .wp-block-gallery.has-nested-images.columns-1 figure.wp-block-image:not(#individual-image) {
    width: 100%
  }

  @media (min-width: 600px) {
    .wp-block-gallery.has-nested-images.columns-3 figure.wp-block-image:not(#individual-image) {
      width:calc(33% - var(--wp--style--unstable-gallery-gap, 16px)*.66667)
    }

    .wp-block-gallery.has-nested-images.columns-4 figure.wp-block-image:not(#individual-image) {
      width: calc(24% - var(--wp--style--unstable-gallery-gap, 16px)*.75)
    }

    .wp-block-gallery.has-nested-images.columns-5 figure.wp-block-image:not(#individual-image) {
      width: calc(19% - var(--wp--style--unstable-gallery-gap, 16px)*.8)
    }

    .wp-block-gallery.has-nested-images.columns-6 figure.wp-block-image:not(#individual-image) {
      width: calc(15% - var(--wp--style--unstable-gallery-gap, 16px)*.83333)
    }

    .wp-block-gallery.has-nested-images.columns-7 figure.wp-block-image:not(#individual-image) {
      width: calc(13% - var(--wp--style--unstable-gallery-gap, 16px)*.85714)
    }

    .wp-block-gallery.has-nested-images.columns-8 figure.wp-block-image:not(#individual-image) {
      width: calc(12% - var(--wp--style--unstable-gallery-gap, 16px)*.875)
    }

    .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image) {
      width: calc(33% - var(--wp--style--unstable-gallery-gap, 16px)*.66667)
    }

    .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:nth-last-child(2),.wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:nth-last-child(2)~figure.wp-block-image:not(#individual-image) {
      width: calc(50% - var(--wp--style--unstable-gallery-gap, 16px)*.5)
    }

    .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:last-child {
      width: 100%
    }
  }

  .wp-block-gallery.has-nested-images.alignleft,.wp-block-gallery.has-nested-images.alignright {
    max-width: 420px;
    width: 100%
  }

  .wp-block-gallery.has-nested-images.aligncenter {
    justify-content: center
  }
</style>



<style id='wp-block-site-logo-inline-css'>
  .wp-block-site-logo {
    box-sizing: border-box;
    line-height: 0
  }

  .wp-block-site-logo a {
    display: inline-block;
    line-height: 0
  }

  .wp-block-site-logo.is-default-size img {
    height: auto;
    width: 120px
  }

  .wp-block-site-logo img {
    height: auto;
    max-width: 100%
  }

  .wp-block-site-logo a,.wp-block-site-logo img {
    border-radius: inherit
  }

  .wp-block-site-logo.aligncenter {
    margin-left: auto;
    margin-right: auto;
    text-align: center
  }

  .wp-block-site-logo.is-style-rounded {
    border-radius: 9999px
  }
</style>
<style id='wp-block-site-title-inline-css'>
  .wp-block-site-title a {
    color: inherit
  }

  .wp-block-site-title {
    font-family: var(--wp--preset--font-family--body);
    font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.542), 1.2rem);
    font-style: normal;
    font-weight: 600;
  }

  .wp-block-site-title a:where(:not(.wp-element-button)) {
    text-decoration: none;
  }

  .wp-block-site-title a:where(:not(.wp-element-button)):hover {
    text-decoration: none;
  }
</style>
<style id='wp-block-group-inline-css'>
  .wp-block-group {
    box-sizing: border-box
  }
</style>
<style id='wp-block-page-list-inline-css'>
  .wp-block-navigation .wp-block-page-list {
    align-items: var(--navigation-layout-align,initial);
    background-color: inherit;
    display: flex;
    flex-direction: var(--navigation-layout-direction,initial);
    flex-wrap: var(--navigation-layout-wrap,wrap);
    justify-content: var(--navigation-layout-justify,initial)
  }

  .wp-block-navigation .wp-block-navigation-item {
    background-color: inherit
  }
</style>
<!-- <link rel='stylesheet' id='wp-block-navigation-css' href='http://localhost:10003/wp-includes/blocks/navigation/style.min.css?ver=6.4.3' media='all'/> -->
<style id='wp-block-navigation-inline-css'>
  .wp-block-navigation {
    font-weight: 500;
  }

  .wp-block-navigation a:where(:not(.wp-element-button)) {
    color: inherit;
    text-decoration: none;
  }

  .wp-block-navigation a:where(:not(.wp-element-button)):hover {
    text-decoration: underline;
  }
</style>
<style id='wp-block-post-featured-image-inline-css'>
  .wp-block-post-featured-image {
    margin-left: 0;
    margin-right: 0
  }

  .wp-block-post-featured-image a {
    display: block;
    height: 100%
  }

  .wp-block-post-featured-image img {
    box-sizing: border-box;
    height: auto;
    max-width: 100%;
    vertical-align: bottom;
    width: 100%
  }

  .wp-block-post-featured-image.alignfull img,.wp-block-post-featured-image.alignwide img {
    width: 100%
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim {
    background-color: #000;
    inset: 0;
    position: absolute
  }

  .wp-block-post-featured-image {
    position: relative
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-gradient {
    background-color: transparent
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-0 {
    opacity: 0
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-10 {
    opacity: .1
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-20 {
    opacity: .2
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-30 {
    opacity: .3
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-40 {
    opacity: .4
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-50 {
    opacity: .5
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-60 {
    opacity: .6
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-70 {
    opacity: .7
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-80 {
    opacity: .8
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-90 {
    opacity: .9
  }

  .wp-block-post-featured-image .wp-block-post-featured-image__overlay.has-background-dim-100 {
    opacity: 1
  }

  .wp-block-post-featured-image:where(.alignleft,.alignright) {
    width: 100%
  }

  .wp-block-post-featured-image img, .wp-block-post-featured-image .block-editor-media-placeholder, .wp-block-post-featured-image .wp-block-post-featured-image__overlay {
    border-radius: var(--wp--preset--spacing--20);
  }
</style>
<style id='wp-block-post-title-inline-css'>
  .wp-block-post-title {
    box-sizing: border-box;
    word-break: break-word
  }

  .wp-block-post-title a {
    display: inline-block
  }

  .wp-block-post-title a:where(:not(.wp-element-button)) {
    text-decoration: none;
  }

  .wp-block-post-title a:where(:not(.wp-element-button)):hover {
    text-decoration: underline;
  }
</style>
<style id='wp-block-post-date-inline-css'>
  .wp-block-post-date {
    box-sizing: border-box
  }

  .wp-block-post-date {
    color: var(--wp--preset--color--contrast-2);
    font-size: var(--wp--preset--font-size--small);
  }

  .wp-block-post-date a:where(:not(.wp-element-button)) {
    color: var(--wp--preset--color--contrast-2);
    text-decoration: none;
  }

  .wp-block-post-date a:where(:not(.wp-element-button)):hover {
    text-decoration: underline;
  }
</style>
<style id='wp-block-paragraph-inline-css'>
  /*.is-small-text {
    font-size: .875em
  }

  .is-regular-text {
    font-size: 1em
  }

  .is-large-text {
    font-size: 2.25em
  }

  .is-larger-text {
    font-size: 3em
  }*/

  .has-drop-cap:not(:focus):first-letter {
    float: left;
    font-size: 8.4em;
    font-style: normal;
    font-weight: 100;
    line-height: .68;
    margin: .05em .1em 0 0;
    text-transform: uppercase
  }

  body.rtl .has-drop-cap:not(:focus):first-letter {
    float: none;
    margin-left: .1em
  }

  p.has-drop-cap.has-background {
    overflow: hidden
  }

  p.has-background {
    padding: 1.25em 2.375em
  }

  :where(p.has-text-color:not(.has-link-color)) a {
    color: inherit
  }

  p.has-text-align-left[style*="writing-mode:vertical-lr"],p.has-text-align-right[style*="writing-mode:vertical-rl"] {
    rotate: 180deg
  }
</style>
<style id='wp-block-post-author-name-inline-css'>
  .wp-block-post-author-name {
    font-size: var(--wp--preset--font-size--small);
  }

  .wp-block-post-author-name a:where(:not(.wp-element-button)) {
    text-decoration: none;
  }

  .wp-block-post-author-name a:where(:not(.wp-element-button)):hover {
    text-decoration: underline;
  }
</style>
<style id='wp-block-post-terms-inline-css'>
  .wp-block-post-terms {
    box-sizing: border-box
  }

  .wp-block-post-terms .wp-block-post-terms__separator {
    white-space: pre-wrap
  }

  .is-style-pill a, .is-style-pill span:not([class], [data-rich-text-placeholder]) {
    display: inline-block;
    background-color: var(--wp--preset--color--base-2);
    padding: 0.375rem 0.875rem;
    border-radius: var(--wp--preset--spacing--20);
  }

  .is-style-pill a:hover {
    background-color: var(--wp--preset--color--contrast-3);
  }

  .wp-block-post-terms {
    font-size: var(--wp--preset--font-size--small);
  }

  .wp-block-post-terms a:where(:not(.wp-element-button)) {
    text-decoration: none;
  }

  .wp-block-post-terms a:where(:not(.wp-element-button)):hover {
    text-decoration: underline;
  }
</style>
<!-- <link rel='stylesheet' id='wp-block-image-css' href='http://localhost:10003/wp-includes/blocks/image/style.min.css?ver=6.4.3' media='all'/> -->
<style id='wp-block-image-inline-css'>
  .is-style-rounded.is-style-rounded.wp-block-image img,.is-style-rounded.is-style-rounded.wp-block-image .wp-block-image__crop-area,.is-style-rounded.is-style-rounded.wp-block-image .components-placeholder {
    border-radius: 9999px;
  }
</style>
<style id='wp-block-embed-inline-css'>
  .wp-block-embed.alignleft,.wp-block-embed.alignright,.wp-block[data-align=left]>[data-type="core/embed"],.wp-block[data-align=right]>[data-type="core/embed"] {
    max-width: 360px;
    width: 100%
  }

  .wp-block-embed.alignleft .wp-block-embed__wrapper,.wp-block-embed.alignright .wp-block-embed__wrapper,.wp-block[data-align=left]>[data-type="core/embed"] .wp-block-embed__wrapper,.wp-block[data-align=right]>[data-type="core/embed"] .wp-block-embed__wrapper {
    min-width: 280px
  }

  .wp-block-cover .wp-block-embed {
    min-height: 240px;
    min-width: 320px
  }

  .wp-block-embed {
    overflow-wrap: break-word
  }

  .wp-block-embed figcaption {
    margin-bottom: 1em;
    margin-top: .5em
  }

  .wp-block-embed iframe {
    max-width: 100%
  }

  .wp-block-embed__wrapper {
    position: relative
  }

  .wp-embed-responsive .wp-has-aspect-ratio .wp-block-embed__wrapper:before {
    content: "";
    display: block;
    padding-top: 50%
  }

  .wp-embed-responsive .wp-has-aspect-ratio iframe {
    bottom: 0;
    height: 100%;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%
  }

  .wp-embed-responsive .wp-embed-aspect-21-9 .wp-block-embed__wrapper:before {
    padding-top: 42.85%
  }

  .wp-embed-responsive .wp-embed-aspect-18-9 .wp-block-embed__wrapper:before {
    padding-top: 50%
  }

  .wp-embed-responsive .wp-embed-aspect-16-9 .wp-block-embed__wrapper:before {
    padding-top: 56.25%
  }

  .wp-embed-responsive .wp-embed-aspect-4-3 .wp-block-embed__wrapper:before {
    padding-top: 75%
  }

  .wp-embed-responsive .wp-embed-aspect-1-1 .wp-block-embed__wrapper:before {
    padding-top: 100%
  }

  .wp-embed-responsive .wp-embed-aspect-9-16 .wp-block-embed__wrapper:before {
    padding-top: 177.77%
  }

  .wp-embed-responsive .wp-embed-aspect-1-2 .wp-block-embed__wrapper:before {
    padding-top: 200%
  }
</style>
<style id='wp-block-spacer-inline-css'>
  .wp-block-spacer {
    clear: both
  }
</style>
<style id='wp-block-separator-inline-css'>
  .wp-block-separator {
    border: 1px solid;
    border-left: none;
    border-right: none
  }

  .wp-block-separator.is-style-dots {
    background: none!important;
    border: none;
    height: auto;
    line-height: 1;
    text-align: center
  }

  .wp-block-separator.is-style-dots:before {
    color: currentColor;
    content: "···";
    font-family: serif;
    font-size: 1.5em;
    letter-spacing: 2em;
    padding-left: 2em
  }

  .wp-block-separator {
    border-color: currentColor;
    border-width: 0 0 1px 0;
    border-style: solid;
    color: var(--wp--preset--color--contrast);
  }
</style>
<style id='wp-block-comments-inline-css'>
  .wp-block-post-comments {
    box-sizing: border-box
  }

  .wp-block-post-comments .alignleft {
    float: left
  }

  .wp-block-post-comments .alignright {
    float: right
  }

  .wp-block-post-comments .navigation:after {
    clear: both;
    content: "";
    display: table
  }

  .wp-block-post-comments .commentlist {
    clear: both;
    list-style: none;
    margin: 0;
    padding: 0
  }

  .wp-block-post-comments .commentlist .comment {
    min-height: 2.25em;
    padding-left: 3.25em
  }

  .wp-block-post-comments .commentlist .comment p {
    font-size: 1em;
    line-height: 1.8;
    margin: 1em 0
  }

  .wp-block-post-comments .commentlist .children {
    list-style: none;
    margin: 0;
    padding: 0
  }

  .wp-block-post-comments .comment-author {
    line-height: 1.5
  }

  .wp-block-post-comments .comment-author .avatar {
    border-radius: 1.5em;
    display: block;
    float: left;
    height: 2.5em;
    margin-right: .75em;
    margin-top: .5em;
    width: 2.5em
  }

  .wp-block-post-comments .comment-author cite {
    font-style: normal
  }

  .wp-block-post-comments .comment-meta {
    font-size: .875em;
    line-height: 1.5
  }

  .wp-block-post-comments .comment-meta b {
    font-weight: 400
  }

  .wp-block-post-comments .comment-meta .comment-awaiting-moderation {
    display: block;
    margin-bottom: 1em;
    margin-top: 1em
  }

  .wp-block-post-comments .comment-body .commentmetadata {
    font-size: .875em
  }

  .wp-block-post-comments .comment-form-author label,.wp-block-post-comments .comment-form-comment label,.wp-block-post-comments .comment-form-email label,.wp-block-post-comments .comment-form-url label {
    display: block;
    margin-bottom: .25em
  }

  .wp-block-post-comments .comment-form input:not([type=submit]):not([type=checkbox]),.wp-block-post-comments .comment-form textarea {
    box-sizing: border-box;
    display: block;
    width: 100%
  }

  .wp-block-post-comments .comment-form-cookies-consent {
    display: flex;
    gap: .25em
  }

  .wp-block-post-comments .comment-form-cookies-consent #wp-comment-cookies-consent {
    margin-top: .35em
  }

  .wp-block-post-comments .comment-reply-title {
    margin-bottom: 0
  }

  .wp-block-post-comments .comment-reply-title :where(small) {
    font-size: var(--wp--preset--font-size--medium,smaller);
    margin-left: .5em
  }

  .wp-block-post-comments .reply {
    font-size: .875em;
    margin-bottom: 1.4em
  }

  .wp-block-post-comments input:not([type=submit]),.wp-block-post-comments textarea {
    border: 1px solid #949494;
    font-family: inherit;
    font-size: 1em
  }

  .wp-block-post-comments input:not([type=submit]):not([type=checkbox]),.wp-block-post-comments textarea {
    padding: calc(.667em + 2px)
  }

  :where(.wp-block-post-comments input[type=submit]) {
    border: none
  }
</style>
<style id='wp-block-post-navigation-link-inline-css'>
  .wp-block-post-navigation-link .wp-block-post-navigation-link__arrow-previous {
    display: inline-block;
    margin-right: 1ch
  }

  .wp-block-post-navigation-link .wp-block-post-navigation-link__arrow-previous:not(.is-arrow-chevron) {
    transform: scaleX(1)
  }

  .wp-block-post-navigation-link .wp-block-post-navigation-link__arrow-next {
    display: inline-block;
    margin-left: 1ch
  }

  .wp-block-post-navigation-link .wp-block-post-navigation-link__arrow-next:not(.is-arrow-chevron) {
    transform: scaleX(1)
  }

  .wp-block-post-navigation-link.has-text-align-left[style*="writing-mode: vertical-lr"],.wp-block-post-navigation-link.has-text-align-right[style*="writing-mode: vertical-rl"] {
    rotate: 180deg
  }
</style>
<style id='wp-block-site-tagline-inline-css'>
  .wp-block-site-tagline {
    color: var(--wp--preset--color--contrast-2);
    font-size: var(--wp--preset--font-size--small);
  }
</style>
<style id='wp-block-heading-inline-css'>
  h1.has-background,h2.has-background,h3.has-background,h4.has-background,h5.has-background,h6.has-background {
    padding: 1.25em 2.375em
  }

  h1.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h1.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h2.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h2.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h3.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h3.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h4.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h4.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h5.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h5.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h6.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h6.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]) {
    rotate: 180deg
  }

  .is-style-asterisk:before {
    content: '';
    width: 1.5rem;
    height: 3rem;
    background: var(--wp--preset--color--contrast-2, currentColor);
    clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
    display: block;
  }

  /* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
  .is-style-asterisk:empty:before {
    content: none;
  }

  .is-style-asterisk:-moz-only-whitespace:before {
    content: none;
  }

  .is-style-asterisk.has-text-align-center:before {
    margin: 0 auto;
  }

  .is-style-asterisk.has-text-align-right:before {
    margin-left: auto;
  }

  .rtl .is-style-asterisk.has-text-align-left:before {
    margin-right: auto;
  }
</style>
<style id='wp-block-navigation-link-inline-css'>
  .wp-block-navigation .wp-block-navigation-item__label {
    overflow-wrap: break-word
  }

  .wp-block-navigation .wp-block-navigation-item__description {
    display: none
  }

  .is-style-arrow-link .wp-block-navigation-item__label:after {
    content: "\2197";
    padding-inline-start: 0.25rem; vertical-align: middle;
    text-decoration: none;
    display: inline-block;
  }
</style>
<style id='wp-block-columns-inline-css'>
  .wp-block-columns {
    align-items: normal!important;
    box-sizing: border-box;
    display: flex;
    flex-wrap: wrap!important
  }

  @media (min-width: 782px) {
    .wp-block-columns {
      flex-wrap:nowrap!important
    }
  }

  .wp-block-columns.are-vertically-aligned-top {
    align-items: flex-start
  }

  .wp-block-columns.are-vertically-aligned-center {
    align-items: center
  }

  .wp-block-columns.are-vertically-aligned-bottom {
    align-items: flex-end
  }

  @media (max-width: 781px) {
    .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
      flex-basis:100%!important
    }
  }

  @media (min-width: 782px) {
    .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
      flex-basis:0;
      flex-grow: 1
    }

    .wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column[style*=flex-basis] {
      flex-grow: 0
    }
  }

  .wp-block-columns.is-not-stacked-on-mobile {
    flex-wrap: nowrap!important
  }

  .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column {
    flex-basis: 0;
    flex-grow: 1
  }

  .wp-block-columns.is-not-stacked-on-mobile>.wp-block-column[style*=flex-basis] {
    flex-grow: 0
  }

  :where(.wp-block-columns) {
    margin-bottom: 0
  }

  :where(.wp-block-columns.has-background) {
    padding: 1.25em 2.375em
  }

  .wp-block-column {
    flex-grow: 1;
    min-width: 0;
    overflow-wrap: break-word;
    word-break: break-word
  }

  .wp-block-column.is-vertically-aligned-top {
    align-self: flex-start
  }

  .wp-block-column.is-vertically-aligned-center {
    align-self: center
  }

  .wp-block-column.is-vertically-aligned-bottom {
    align-self: flex-end
  }

  .wp-block-column.is-vertically-aligned-stretch {
    align-self: stretch
  }

  .wp-block-column.is-vertically-aligned-bottom,.wp-block-column.is-vertically-aligned-center,.wp-block-column.is-vertically-aligned-top {
    width: 100%
  }
</style>
<style id='wp-emoji-styles-inline-css'>
  img.wp-smiley, img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 0.07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
  }
</style>
<style id='wp-block-library-inline-css'>
  :root {
    --wp-admin-theme-color: #007cba;
    --wp-admin-theme-color--rgb: 0,124,186;
    --wp-admin-theme-color-darker-10: #006ba1;
    --wp-admin-theme-color-darker-10--rgb: 0,107,161;
    --wp-admin-theme-color-darker-20: #005a87;
    --wp-admin-theme-color-darker-20--rgb: 0,90,135;
    --wp-admin-border-width-focus: 2px;
    --wp-block-synced-color: #7a00df;
    --wp-block-synced-color--rgb: 122,0,223
  }

  @media (min-resolution: 192dpi) {
    :root {
      --wp-admin-border-width-focus:1.5px
    }
  }

  .wp-element-button {
    cursor: pointer
  }

  :root {
    --wp--preset--font-size--normal: 16px;
    --wp--preset--font-size--huge: 42px
  }

  :root .has-very-light-gray-background-color {
    background-color: #eee
  }

  :root .has-very-dark-gray-background-color {
    background-color: #313131
  }

  :root .has-very-light-gray-color {
    color: #eee
  }

  :root .has-very-dark-gray-color {
    color: #313131
  }

  :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
    background: linear-gradient(135deg,#00d084,#0693e3)
  }

  :root .has-purple-crush-gradient-background {
    background: linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)
  }

  :root .has-hazy-dawn-gradient-background {
    background: linear-gradient(135deg,#faaca8,#dad0ec)
  }

  :root .has-subdued-olive-gradient-background {
    background: linear-gradient(135deg,#fafae1,#67a671)
  }

  :root .has-atomic-cream-gradient-background {
    background: linear-gradient(135deg,#fdd79a,#004a59)
  }

  :root .has-nightshade-gradient-background {
    background: linear-gradient(135deg,#330968,#31cdcf)
  }

  :root .has-midnight-gradient-background {
    background: linear-gradient(135deg,#020381,#2874fc)
  }

  .has-regular-font-size {
    font-size: 1em
  }

  .has-larger-font-size {
    font-size: 2.625em
  }

  .has-normal-font-size {
    font-size: var(--wp--preset--font-size--normal)
  }

  .has-huge-font-size {
    font-size: var(--wp--preset--font-size--huge)
  }

  .has-text-align-center {
    text-align: center
  }

  .has-text-align-left {
    text-align: left
  }

  .has-text-align-right {
    text-align: right
  }

  #end-resizable-editor-section {
    display: none
  }

  .aligncenter {
    clear: both
  }

  .items-justified-left {
    justify-content: flex-start
  }

  .items-justified-center {
    justify-content: center
  }

  .items-justified-right {
    justify-content: flex-end
  }

  .items-justified-space-between {
    justify-content: space-between
  }

  .screen-reader-text {
    clip: rect(1px,1px,1px,1px);
    word-wrap: normal!important;
    border: 0;
    -webkit-clip-path: inset(50%);
    clip-path: inset(50%);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px
  }

  .screen-reader-text:focus {
    clip: auto!important;
    background-color: #ddd;
    -webkit-clip-path: none;
    clip-path: none;
    color: #444;
    display: block;
    font-size: 1em;
    height: auto;
    left: 5px;
    line-height: normal;
    padding: 15px 23px 14px;
    text-decoration: none;
    top: 5px;
    width: auto;
    z-index: 100000
  }

  html :where(.has-border-color) {
    border-style: solid
  }

  html :where([style*=border-top-color]) {
    border-top-style: solid
  }

  html :where([style*=border-right-color]) {
    border-right-style: solid
  }

  html :where([style*=border-bottom-color]) {
    border-bottom-style: solid
  }

  html :where([style*=border-left-color]) {
    border-left-style: solid
  }

  html :where([style*=border-width]) {
    border-style: solid
  }

  html :where([style*=border-top-width]) {
    border-top-style: solid
  }

  html :where([style*=border-right-width]) {
    border-right-style: solid
  }

  html :where([style*=border-bottom-width]) {
    border-bottom-style: solid
  }

  html :where([style*=border-left-width]) {
    border-left-style: solid
  }

  html :where(img[class*=wp-image-]) {
    height: auto;
    max-width: 100%
  }

  :where(figure) {
    margin: 0 0 1em
  }

  html :where(.is-position-sticky) {
    --wp-admin--admin-bar--position-offset: var(--wp-admin--admin-bar--height,0px)
  }

  @media screen and (max-width: 600px) {
    html :where(.is-position-sticky) {
      --wp-admin--admin-bar--position-offset:0px
    }
  }
</style>
<style id='global-styles-inline-css'>
  body {
    --wp--preset--color--black: #000000;
    --wp--preset--color--cyan-bluish-gray: #abb8c3;
    --wp--preset--color--white: #ffffff;
    --wp--preset--color--pale-pink: #f78da7;
    --wp--preset--color--vivid-red: #cf2e2e;
    --wp--preset--color--luminous-vivid-orange: #ff6900;
    --wp--preset--color--luminous-vivid-amber: #fcb900;
    --wp--preset--color--light-green-cyan: #7bdcb5;
    --wp--preset--color--vivid-green-cyan: #00d084;
    --wp--preset--color--pale-cyan-blue: #8ed1fc;
    --wp--preset--color--vivid-cyan-blue: #0693e3;
    --wp--preset--color--vivid-purple: #9b51e0;
    --wp--preset--color--base: #f9f9f9;
    --wp--preset--color--base-2: #ffffff;
    --wp--preset--color--contrast: #111111;
    --wp--preset--color--contrast-2: #636363;
    --wp--preset--color--contrast-3: #A4A4A4;
    --wp--preset--color--accent: #cfcabe;
    --wp--preset--color--accent-2: #c2a990;
    --wp--preset--color--accent-3: #d8613c;
    --wp--preset--color--accent-4: #b1c5a4;
    --wp--preset--color--accent-5: #b5bdbc;
    --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);
    --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);
    --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);
    --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);
    --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);
    --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);
    --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);
    --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);
    --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);
    --wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);
    --wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);
    --wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);
    --wp--preset--gradient--gradient-1: linear-gradient(to bottom, #cfcabe 0%, #F9F9F9 100%);
    --wp--preset--gradient--gradient-2: linear-gradient(to bottom, #C2A990 0%, #F9F9F9 100%);
    --wp--preset--gradient--gradient-3: linear-gradient(to bottom, #D8613C 0%, #F9F9F9 100%);
    --wp--preset--gradient--gradient-4: linear-gradient(to bottom, #B1C5A4 0%, #F9F9F9 100%);
    --wp--preset--gradient--gradient-5: linear-gradient(to bottom, #B5BDBC 0%, #F9F9F9 100%);
    --wp--preset--gradient--gradient-6: linear-gradient(to bottom, #A4A4A4 0%, #F9F9F9 100%);
    --wp--preset--gradient--gradient-7: linear-gradient(to bottom, #cfcabe 50%, #F9F9F9 50%);
    --wp--preset--gradient--gradient-8: linear-gradient(to bottom, #C2A990 50%, #F9F9F9 50%);
    --wp--preset--gradient--gradient-9: linear-gradient(to bottom, #D8613C 50%, #F9F9F9 50%);
    --wp--preset--gradient--gradient-10: linear-gradient(to bottom, #B1C5A4 50%, #F9F9F9 50%);
    --wp--preset--gradient--gradient-11: linear-gradient(to bottom, #B5BDBC 50%, #F9F9F9 50%);
    --wp--preset--gradient--gradient-12: linear-gradient(to bottom, #A4A4A4 50%, #F9F9F9 50%);
    --wp--preset--font-size--small: 0.9rem;
    --wp--preset--font-size--medium: 1.05rem;
    --wp--preset--font-size--large: clamp(1.39rem, 1.39rem + ((1vw - 0.2rem) * 0.767), 1.85rem);
    --wp--preset--font-size--x-large: clamp(1.85rem, 1.85rem + ((1vw - 0.2rem) * 1.083), 2.5rem);
    --wp--preset--font-size--xx-large: clamp(2.5rem, 2.5rem + ((1vw - 0.2rem) * 1.283), 3.27rem);
    --wp--preset--font-family--body: "Inter", sans-serif;
    --wp--preset--font-family--heading: Cardo;
    --wp--preset--font-family--system-sans-serif: -apple-system, BlinkMacSystemFont, avenir next, avenir, segoe ui, helvetica neue, helvetica, Cantarell, Ubuntu, roboto, noto, arial, sans-serif;
    --wp--preset--font-family--system-serif: Iowan Old Style, Apple Garamond, Baskerville, Times New Roman, Droid Serif, Times, Source Serif Pro, serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
    --wp--preset--spacing--10: 1rem;
    --wp--preset--spacing--20: min(1.5rem, 2vw);
    --wp--preset--spacing--30: min(2.5rem, 3vw);
    --wp--preset--spacing--40: min(4rem, 5vw);
    --wp--preset--spacing--50: min(6.5rem, 8vw);
    --wp--preset--spacing--60: min(10.5rem, 13vw);
    --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
    --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
    --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
    --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
    --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
  }

  body {
    margin: 0;
    --wp--style--global--content-size: 620px;
    --wp--style--global--wide-size: 1280px;
  }

  .wp-site-blocks {
    padding-top: var(--wp--style--root--padding-top);
    padding-bottom: var(--wp--style--root--padding-bottom);
  }

  .has-global-padding {
    padding-right: var(--wp--style--root--padding-right);
    padding-left: var(--wp--style--root--padding-left);
  }

  .has-global-padding :where(.has-global-padding:not(.wp-block-block)) {
    padding-right: 0;
    padding-left: 0;
  }

  .has-global-padding > .alignfull {
    margin-right: calc(var(--wp--style--root--padding-right) * -1);
    margin-left: calc(var(--wp--style--root--padding-left) * -1);
  }

  .has-global-padding :where(.has-global-padding:not(.wp-block-block)) > .alignfull {
    margin-right: 0;
    margin-left: 0;
  }

  .has-global-padding > .alignfull:where(:not(.has-global-padding):not(.is-layout-flex):not(.is-layout-grid)) > :where([class*="wp-block-"]:not(.alignfull):not([class*="__"]),p,h1,h2,h3,h4,h5,h6,ul,ol) {
    padding-right: var(--wp--style--root--padding-right);
    padding-left: var(--wp--style--root--padding-left);
  }

  .has-global-padding :where(.has-global-padding) > .alignfull:where(:not(.has-global-padding)) > :where([class*="wp-block-"]:not(.alignfull):not([class*="__"]),p,h1,h2,h3,h4,h5,h6,ul,ol) {
    padding-right: 0;
    padding-left: 0;
  }

  .wp-site-blocks > .alignleft {
    float: left;
    margin-right: 2em;
  }

  .wp-site-blocks > .alignright {
    float: right;
    margin-left: 2em;
  }

  .wp-site-blocks > .aligncenter {
    justify-content: center;
    margin-left: auto;
    margin-right: auto;
  }

  :where(.wp-site-blocks) > * {
    margin-block-start: 1.2rem; margin-block-end: 0; }

  :where(.wp-site-blocks) > :first-child:first-child {
    margin-block-start: 0; }

  :where(.wp-site-blocks) > :last-child:last-child {
    margin-block-end: 0; }

  body {
    --wp--style--block-gap: 2rem;
  }

  @media screen and (max-width: 1200px) {
    body {
      --wp--style--block-gap: 1.2rem;
    }
  }

  :where(body .is-layout-flow) > :first-child:first-child {
    margin-block-start: 0 !important;}

  :where(body .is-layout-flow) > :last-child:last-child {
    margin-block-end: 0;}

  :where(body .is-layout-flow) > * {
    margin-block-start: 1.2rem !important;margin-block-end: 0;}

  :where(body .is-layout-constrained) > :first-child:first-child {
    margin-block-start: 0;}

  :where(body .is-layout-constrained) > :last-child:last-child {
    margin-block-end: 0;}

  :where(body .is-layout-constrained) > * {
    margin-block-start: 1.2rem;margin-block-end: 0;}

  :where(body .is-layout-flex) {
    gap: var(--wp--style--block-gap);
  }

  :where(body .is-layout-grid) {
    gap: var(--wp--style--block-gap);
  }

  body .is-layout-flow > .alignleft {
    float: left;
    margin-inline-start: 0;margin-inline-end: 2em;}

  body .is-layout-flow > .alignright {
    float: right;
    margin-inline-start: 2em;margin-inline-end: 0;}

  body .is-layout-flow > .aligncenter {
    margin-left: auto !important;
    margin-right: auto !important;
  }

  body .is-layout-constrained > .alignleft {
    float: left;
    margin-inline-start: 0;margin-inline-end: 2em;}

  body .is-layout-constrained > .alignright {
    float: right;
    margin-inline-start: 2em;margin-inline-end: 0;}

  body .is-layout-constrained > .aligncenter {
    margin-left: auto !important;
    margin-right: auto !important;
  }

  body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
    max-width: var(--wp--style--global--content-size);
    margin-left: auto !important;
    margin-right: auto !important;
  }

  body .is-layout-constrained > .alignwide {
    max-width: var(--wp--style--global--wide-size);
  }

  body .is-layout-flex {
    display: flex;
  }

  body .is-layout-flex {
    flex-wrap: wrap;
    align-items: center;
  }

  body .is-layout-flex > * {
    margin: 0;
  }

  body .is-layout-grid {
    display: grid;
  }

  body .is-layout-grid > * {
    margin: 0;
  }

  /*body {
    background-color: var(--wp--preset--color--base);
    color: var(--wp--preset--color--contrast);
    font-family: var(--wp--preset--font-family--body);
    font-size: var(--wp--preset--font-size--medium);
    font-style: normal;
    font-weight: 400;
    line-height: 1.55;
    --wp--style--root--padding-top: 0px;
    --wp--style--root--padding-right: var(--wp--preset--spacing--50);
    --wp--style--root--padding-bottom: 0px;
    --wp--style--root--padding-left: var(--wp--preset--spacing--50);
  }*/

  /*a:where(:not(.wp-element-button)) {
    color: var(--wp--preset--color--contrast);
    text-decoration: underline;
  }

  a:where(:not(.wp-element-button)):hover {
    text-decoration: none;
  }

  h1, h2, h3, h4, h5, h6 {
    color: var(--wp--preset--color--contrast);
    font-family: var(--wp--preset--font-family--heading);
    font-weight: 400;
    line-height: 1.2;
  }*/

  /*h1 {
    font-size: var(--wp--preset--font-size--xx-large);
    line-height: 1.15;
  }

  h2 {
    font-size: var(--wp--preset--font-size--x-large);
  }

  h3 {
    font-size: var(--wp--preset--font-size--large);
  }

  h4 {
    font-size: clamp(1.1rem, 1.1rem + ((1vw - 0.2rem) * 0.767), 1.5rem);
  }

  h5 {
    font-size: var(--wp--preset--font-size--medium);
  }

  h6 {
    font-size: var(--wp--preset--font-size--small);
  }*/

  .wp-element-button, .wp-block-button__link {
    background-color: var(--wp--preset--color--contrast);
    border-radius: .33rem;
    border-color: var(--wp--preset--color--contrast);
    border-width: 0;
    color: var(--wp--preset--color--base);
    font-family: inherit;
    font-size: var(--wp--preset--font-size--small);
    font-style: normal;
    font-weight: 500;
    line-height: inherit;
    padding-top: 0.6rem;
    padding-right: 1rem;
    padding-bottom: 0.6rem;
    padding-left: 1rem;
    text-decoration: none;
  }

  .wp-element-button:hover, .wp-block-button__link:hover {
    background-color: var(--wp--preset--color--contrast-2);
    border-color: var(--wp--preset--color--contrast-2);
    color: var(--wp--preset--color--base);
  }

  .wp-element-button:focus, .wp-block-button__link:focus {
    background-color: var(--wp--preset--color--contrast-2);
    border-color: var(--wp--preset--color--contrast-2);
    color: var(--wp--preset--color--base);
    outline-color: var(--wp--preset--color--contrast);
    outline-offset: 2px;
    outline-style: dotted;
    outline-width: 1px;
  }

  .wp-element-button:active, .wp-block-button__link:active {
    background-color: var(--wp--preset--color--contrast);
    color: var(--wp--preset--color--base);
  }

  .wp-element-caption, .wp-block-audio figcaption, .wp-block-embed figcaption, .wp-block-gallery figcaption, .wp-block-image figcaption, .wp-block-table figcaption, .wp-block-video figcaption {
    color: var(--wp--preset--color--contrast-2);
    font-family: var(--wp--preset--font-family--body);
    font-size: 0.8rem;
  }

  .has-black-color {
    color: var(--wp--preset--color--black) !important;
  }

  .has-cyan-bluish-gray-color {
    color: var(--wp--preset--color--cyan-bluish-gray) !important;
  }

  .has-white-color {
    color: var(--wp--preset--color--white) !important;
  }

  .has-pale-pink-color {
    color: var(--wp--preset--color--pale-pink) !important;
  }

  .has-vivid-red-color {
    color: var(--wp--preset--color--vivid-red) !important;
  }

  .has-luminous-vivid-orange-color {
    color: var(--wp--preset--color--luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-amber-color {
    color: var(--wp--preset--color--luminous-vivid-amber) !important;
  }

  .has-light-green-cyan-color {
    color: var(--wp--preset--color--light-green-cyan) !important;
  }

  .has-vivid-green-cyan-color {
    color: var(--wp--preset--color--vivid-green-cyan) !important;
  }

  .has-pale-cyan-blue-color {
    color: var(--wp--preset--color--pale-cyan-blue) !important;
  }

  .has-vivid-cyan-blue-color {
    color: var(--wp--preset--color--vivid-cyan-blue) !important;
  }

  .has-vivid-purple-color {
    color: var(--wp--preset--color--vivid-purple) !important;
  }

  .has-base-color {
    color: var(--wp--preset--color--base) !important;
  }

  .has-base-2-color {
    color: var(--wp--preset--color--base-2) !important;
  }

  .has-contrast-color {
    color: var(--wp--preset--color--contrast) !important;
  }

  .has-contrast-2-color {
    color: var(--wp--preset--color--contrast-2) !important;
  }

  .has-contrast-3-color {
    color: var(--wp--preset--color--contrast-3) !important;
  }

  .has-accent-color {
    color: var(--wp--preset--color--accent) !important;
  }

  .has-accent-2-color {
    color: var(--wp--preset--color--accent-2) !important;
  }

  .has-accent-3-color {
    color: var(--wp--preset--color--accent-3) !important;
  }

  .has-accent-4-color {
    color: var(--wp--preset--color--accent-4) !important;
  }

  .has-accent-5-color {
    color: var(--wp--preset--color--accent-5) !important;
  }

  .has-black-background-color {
    background-color: var(--wp--preset--color--black) !important;
  }

  .has-cyan-bluish-gray-background-color {
    background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
  }

  .has-white-background-color {
    background-color: var(--wp--preset--color--white) !important;
  }

  .has-pale-pink-background-color {
    background-color: var(--wp--preset--color--pale-pink) !important;
  }

  .has-vivid-red-background-color {
    background-color: var(--wp--preset--color--vivid-red) !important;
  }

  .has-luminous-vivid-orange-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-amber-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
  }

  .has-light-green-cyan-background-color {
    background-color: var(--wp--preset--color--light-green-cyan) !important;
  }

  .has-vivid-green-cyan-background-color {
    background-color: var(--wp--preset--color--vivid-green-cyan) !important;
  }

  .has-pale-cyan-blue-background-color {
    background-color: var(--wp--preset--color--pale-cyan-blue) !important;
  }

  .has-vivid-cyan-blue-background-color {
    background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
  }

  .has-vivid-purple-background-color {
    background-color: var(--wp--preset--color--vivid-purple) !important;
  }

  .has-base-background-color {
    background-color: var(--wp--preset--color--base) !important;
  }

  .has-base-2-background-color {
    background-color: var(--wp--preset--color--base-2) !important;
  }

  .has-contrast-background-color {
    background-color: var(--wp--preset--color--contrast) !important;
  }

  .has-contrast-2-background-color {
    background-color: var(--wp--preset--color--contrast-2) !important;
  }

  .has-contrast-3-background-color {
    background-color: var(--wp--preset--color--contrast-3) !important;
  }

  .has-accent-background-color {
    background-color: var(--wp--preset--color--accent) !important;
  }

  .has-accent-2-background-color {
    background-color: var(--wp--preset--color--accent-2) !important;
  }

  .has-accent-3-background-color {
    background-color: var(--wp--preset--color--accent-3) !important;
  }

  .has-accent-4-background-color {
    background-color: var(--wp--preset--color--accent-4) !important;
  }

  .has-accent-5-background-color {
    background-color: var(--wp--preset--color--accent-5) !important;
  }

  .has-black-border-color {
    border-color: var(--wp--preset--color--black) !important;
  }

  .has-cyan-bluish-gray-border-color {
    border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
  }

  .has-white-border-color {
    border-color: var(--wp--preset--color--white) !important;
  }

  .has-pale-pink-border-color {
    border-color: var(--wp--preset--color--pale-pink) !important;
  }

  .has-vivid-red-border-color {
    border-color: var(--wp--preset--color--vivid-red) !important;
  }

  .has-luminous-vivid-orange-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-amber-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
  }

  .has-light-green-cyan-border-color {
    border-color: var(--wp--preset--color--light-green-cyan) !important;
  }

  .has-vivid-green-cyan-border-color {
    border-color: var(--wp--preset--color--vivid-green-cyan) !important;
  }

  .has-pale-cyan-blue-border-color {
    border-color: var(--wp--preset--color--pale-cyan-blue) !important;
  }

  .has-vivid-cyan-blue-border-color {
    border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
  }

  .has-vivid-purple-border-color {
    border-color: var(--wp--preset--color--vivid-purple) !important;
  }

  .has-base-border-color {
    border-color: var(--wp--preset--color--base) !important;
  }

  .has-base-2-border-color {
    border-color: var(--wp--preset--color--base-2) !important;
  }

  .has-contrast-border-color {
    border-color: var(--wp--preset--color--contrast) !important;
  }

  .has-contrast-2-border-color {
    border-color: var(--wp--preset--color--contrast-2) !important;
  }

  .has-contrast-3-border-color {
    border-color: var(--wp--preset--color--contrast-3) !important;
  }

  .has-accent-border-color {
    border-color: var(--wp--preset--color--accent) !important;
  }

  .has-accent-2-border-color {
    border-color: var(--wp--preset--color--accent-2) !important;
  }

  .has-accent-3-border-color {
    border-color: var(--wp--preset--color--accent-3) !important;
  }

  .has-accent-4-border-color {
    border-color: var(--wp--preset--color--accent-4) !important;
  }

  .has-accent-5-border-color {
    border-color: var(--wp--preset--color--accent-5) !important;
  }

  .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
    background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
  }

  .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
    background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
  }

  .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-orange-to-vivid-red-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
  }

  .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
    background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
  }

  .has-cool-to-warm-spectrum-gradient-background {
    background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
  }

  .has-blush-light-purple-gradient-background {
    background: var(--wp--preset--gradient--blush-light-purple) !important;
  }

  .has-blush-bordeaux-gradient-background {
    background: var(--wp--preset--gradient--blush-bordeaux) !important;
  }

  .has-luminous-dusk-gradient-background {
    background: var(--wp--preset--gradient--luminous-dusk) !important;
  }

  .has-pale-ocean-gradient-background {
    background: var(--wp--preset--gradient--pale-ocean) !important;
  }

  .has-electric-grass-gradient-background {
    background: var(--wp--preset--gradient--electric-grass) !important;
  }

  .has-midnight-gradient-background {
    background: var(--wp--preset--gradient--midnight) !important;
  }

  .has-gradient-1-gradient-background {
    background: var(--wp--preset--gradient--gradient-1) !important;
  }

  .has-gradient-2-gradient-background {
    background: var(--wp--preset--gradient--gradient-2) !important;
  }

  .has-gradient-3-gradient-background {
    background: var(--wp--preset--gradient--gradient-3) !important;
  }

  .has-gradient-4-gradient-background {
    background: var(--wp--preset--gradient--gradient-4) !important;
  }

  .has-gradient-5-gradient-background {
    background: var(--wp--preset--gradient--gradient-5) !important;
  }

  .has-gradient-6-gradient-background {
    background: var(--wp--preset--gradient--gradient-6) !important;
  }

  .has-gradient-7-gradient-background {
    background: var(--wp--preset--gradient--gradient-7) !important;
  }

  .has-gradient-8-gradient-background {
    background: var(--wp--preset--gradient--gradient-8) !important;
  }

  .has-gradient-9-gradient-background {
    background: var(--wp--preset--gradient--gradient-9) !important;
  }

  .has-gradient-10-gradient-background {
    background: var(--wp--preset--gradient--gradient-10) !important;
  }

  .has-gradient-11-gradient-background {
    background: var(--wp--preset--gradient--gradient-11) !important;
  }

  .has-gradient-12-gradient-background {
    background: var(--wp--preset--gradient--gradient-12) !important;
  }

  /*.has-small-font-size {
    font-size: var(--wp--preset--font-size--small) !important;
  }

  .has-medium-font-size {
    font-size: var(--wp--preset--font-size--medium) !important;
  }

  .has-large-font-size {
    font-size: var(--wp--preset--font-size--large) !important;
  }

  .has-x-large-font-size {
    font-size: var(--wp--preset--font-size--x-large) !important;
  }

  .has-xx-large-font-size {
    font-size: var(--wp--preset--font-size--xx-large) !important;
  }*/

  .has-body-font-family {
    font-family: var(--wp--preset--font-family--body) !important;
  }

  .has-heading-font-family {
    font-family: var(--wp--preset--font-family--heading) !important;
  }

  .has-system-sans-serif-font-family {
    font-family: var(--wp--preset--font-family--system-sans-serif) !important;
  }

  .has-system-serif-font-family {
    font-family: var(--wp--preset--font-family--system-serif) !important;
  }

  .wp-block-calendar.wp-block-calendar table:where(:not(.has-text-color)) th {
    background-color: var(--wp--preset--color--contrast-2);
    color: var(--wp--preset--color--base);
    border-color: var(--wp--preset--color--contrast-2)
  }

  .wp-block-calendar table:where(:not(.has-text-color)) td {
    border-color: var(--wp--preset--color--contrast-2)
  }

  .wp-block-categories {
  }

  .wp-block-categories {
    list-style-type: none;
  }

  .wp-block-categories li {
    margin-bottom: 0.5rem;
  }

  .wp-block-post-comments-form {
  }

  .wp-block-post-comments-form textarea, .wp-block-post-comments-form input {
    border-radius: .33rem
  }

  .wp-block-loginout {
  }

  .wp-block-loginout input {
    border-radius: .33rem;
    padding: calc(0.667em + 2px);
    border: 1px solid #949494;
  }

  .wp-block-post-terms {
  }

  .wp-block-post-terms .wp-block-post-terms__prefix {
    color: var(--wp--preset--color--contrast-2);
  }

  .wp-block-query-title {
  }

  .wp-block-query-title span {
    font-style: italic;
  }

  .wp-block-quote {
  }

  .wp-block-quote :where(p) {
    margin-block-start:0;margin-block-end:calc(var(--wp--preset--spacing--10) + 0.5rem);}

  .wp-block-quote : where(:last-child) {
    margin-block-end:0;
  }

  .wp-block-quote.has-text-align-right.is-style-plain, .rtl .is-style-plain.wp-block-quote:not(.has-text-align-center):not(.has-text-align-left) {
    border-width: 0 2px 0 0;
    padding-left: calc(var(--wp--preset--spacing--20) + 0.5rem);
    padding-right: calc(var(--wp--preset--spacing--20) + 0.5rem);
  }

  .wp-block-quote.has-text-align-left.is-style-plain, body:not(.rtl) .is-style-plain.wp-block-quote:not(.has-text-align-center):not(.has-text-align-right) {
    border-width: 0 0 0 2px;
    padding-left: calc(var(--wp--preset--spacing--20) + 0.5rem);
    padding-right: calc(var(--wp--preset--spacing--20) + 0.5rem)
  }

  .wp-block-search {
  }

  .wp-block-search .wp-block-search__input {
    border-radius: .33rem
  }

  .wp-block-separator {
  }

  .wp-block-separator:not(.is-style-wide):not(.is-style-dots):not(.alignwide):not(.alignfull) {
    width: var(--wp--preset--spacing--60)
  }
</style>
<style id='core-block-supports-inline-css'>
  .wp-container-core-group-layout-1.wp-container-core-group-layout-1 > * {
    margin-block-start:0;margin-block-end:0;}

  .wp-container-core-group-layout-1.wp-container-core-group-layout-1.wp-container-core-group-layout-1.wp-container-core-group-layout-1 > * + * {
    margin-block-start:0px;margin-block-end:0;}

  .wp-container-core-group-layout-2.wp-container-core-group-layout-2 {
    gap: var(--wp--preset--spacing--20);
  }

  .wp-container-core-navigation-layout-1.wp-container-core-navigation-layout-1 {
    gap: var(--wp--preset--spacing--20);
    justify-content: flex-end;
  }

  .wp-container-core-group-layout-3.wp-container-core-group-layout-3 {
    justify-content: space-between;
  }

  .wp-container-core-group-layout-5.wp-container-core-group-layout-5 {
    gap: 0.3em;
    justify-content: flex-start;
  }

  .wp-container-core-group-layout-7.wp-container-core-group-layout-7 {
    gap: var(--wp--preset--spacing--10);
    flex-direction: column;
    align-items: stretch;
  }

  .wp-container-core-group-layout-9.wp-container-core-group-layout-9 {
    flex-wrap: nowrap;
    align-items: flex-start;
  }

  .wp-container-core-group-layout-10.wp-container-core-group-layout-10 {
    flex-wrap: nowrap;
    justify-content: space-between;
  }

  .wp-container-core-group-layout-14.wp-container-core-group-layout-14 {
    flex-direction: column;
    align-items: flex-start;
  }

  .wp-container-core-navigation-layout-2.wp-container-core-navigation-layout-2 {
    gap: var(--wp--preset--spacing--10);
    flex-direction: column;
    align-items: flex-start;
  }

  .wp-container-core-group-layout-15.wp-container-core-group-layout-15 {
    gap: var(--wp--preset--spacing--10);
    flex-direction: column;
    align-items: flex-start;
  }

  .wp-container-core-group-layout-16.wp-container-core-group-layout-16 {
    flex-direction: column;
    align-items: stretch;
  }

  .wp-container-core-navigation-layout-3.wp-container-core-navigation-layout-3 {
    gap: var(--wp--preset--spacing--10);
    flex-direction: column;
    align-items: flex-start;
  }

  .wp-container-core-group-layout-17.wp-container-core-group-layout-17 {
    gap: var(--wp--preset--spacing--10);
    flex-direction: column;
    align-items: flex-start;
  }

  .wp-container-core-group-layout-18.wp-container-core-group-layout-18 {
    flex-direction: column;
    align-items: stretch;
  }

  .wp-container-core-navigation-layout-4.wp-container-core-navigation-layout-4 {
    gap: var(--wp--preset--spacing--10);
    flex-direction: column;
    align-items: flex-start;
  }

  .wp-container-core-group-layout-19.wp-container-core-group-layout-19 {
    gap: var(--wp--preset--spacing--10);
    flex-direction: column;
    align-items: flex-start;
  }

  .wp-container-core-group-layout-20.wp-container-core-group-layout-20 {
    flex-direction: column;
    align-items: stretch;
  }

  .wp-container-core-group-layout-21.wp-container-core-group-layout-21 {
    justify-content: space-between;
    align-items: flex-start;
  }

  .wp-container-core-columns-layout-1.wp-container-core-columns-layout-1 {
    flex-wrap: nowrap;
  }

  .wp-elements-69572150eb9a4490d99720e45b321c34 a {
    color: var(--wp--preset--color--contrast);
  }
</style>
<style id='wp-block-template-skip-link-inline-css'>
  .skip-link.screen-reader-text {
    border: 0;
    clip: rect(1px,1px,1px,1px);
    clip-path: inset(50%);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute !important;
    width: 1px;
    word-wrap: normal !important;
  }

  .skip-link.screen-reader-text:focus {
    background-color: #eee;
    clip: auto !important;
    clip-path: none;
    color: #444;
    display: block;
    font-size: 1em;
    height: auto;
    left: 5px;
    line-height: normal;
    padding: 15px 23px 14px;
    text-decoration: none;
    top: 5px;
    width: auto;
    z-index: 100000;
  }
</style>