plaintext = PAGE
plaintext {
  typeNum = 99

  config {
    disableAllHeaderCode = 1
    additionalHeaders = Content-type:text/plain;charset=utf-8
    renderCharset = utf-8
  }

  ### Inherit rendering of content records from page template
  10 < page.10
  ### Pass HTML output to Html2Text Script
  10.stdWrap.preUserFunc = Html2TextLibrary->convert

  ### Optional: Styling
  10.stdWrap.preUserFunc.renderLinks = {$plugin.tx_html2textlibrary.renderLinks}
  10.stdWrap.preUserFunc.textWidth = {$plugin.tx_html2textlibrary.textWidth}

  ### Optional: Add Direct Mail wrapper tags for plain text newsletter
  10.stdWrap.outerWrap = <!--DMAILER_SECTION_BOUNDARY_-->|<!--DMAILER_SECTION_BOUNDARY_END-->
  10.stdWrap.outerWrap.if.isTrue = {$plugin.tx_html2textlibrary.addDirectMailWrapperTags}
}
