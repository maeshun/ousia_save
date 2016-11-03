<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php 
  $is_top = false;
  if ($_SERVER['REQUEST_URI'] == '/') {
    $is_top = true;
  }
 ?>

  <footer class="footer">
    <div class="footer__contents">
      <div class="footerLogo"><img src="/assets/img/logo_white.svg" alt="save the energy project"></div>
      <div class="footerLink">
        <ul class="footerLinkContainer">
          <li class="footerLinkList"><a href="<?= $is_top ? '' : '/'; ?>#news" class="footerLinkList__link">NEWS</a></li>
          <li class="footerLinkList"><a href="<?= $is_top ? '' : '/'; ?>#about" class="footerLinkList__link">ABOUT</a></li>
          <li class="footerLinkList"><a href="<?= $is_top ? '' : '/'; ?>#event" class="footerLinkList__link">EVENT</a></li>
          <li class="footerLinkList"><a href="<?= $is_top ? '' : '/'; ?>#link" class="footerLinkList__link">LINK</a></li>
          <li class="footerLinkList"><a href="https://www.instagram.com/savetheenergyproject/" class="footerLinkList__link" target="_blank">INSTAGRAM</a></li>
        </ul>
      </div>
      <div class="footerContact">
        <h4 class="contact__title">CONTACT</h4>
        <p class="contact__email"><a href="mailto:info@savetheenergy.jp">info@savetheenergy.jp</a></p>
      </div>
      <p class="copy">&copy;2016 SAVE THE ENERGY PROJECT.</p>
    </div>
  </footer>
</div>
<?php if (!$is_top) : ?>
<div class="mask"></div>
<?php endif; ?>

<div class="openingContent">
  <div class="video">
    <div class="video__cover"><div class="videoOver__down">CONTENT</div></div>
  </div>
  <div class="openingMask"></div>
  <div class="openingLogo">
<svg version="1.1" id="openingLogo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 345.8 127.6" enable-background="new 0 0 345.8 127.6" xml:space="preserve">
    <path id="XMLID_34_" class="svg_logo" data-start="0" data-duration="10" fill="#FFFFFF" d="M61,5.7C28.9,5.7,2.8,31.8,2.8,63.9c0,32.1,26.1,58.2,58.2,58.2s58.2-26.1,58.2-58.2
      C119.3,31.8,93.1,5.7,61,5.7z M97.5,95.9c1.3-3.9,2-8,2-12.4C99.6,62.3,82.3,45,61,45h-9.5v9.6H61c15.9,0,28.9,13,28.9,28.9
      c0,15.9-13,28.9-28.9,28.9v0c-26.8,0-48.6-21.8-48.6-48.6c0-12.3,4.6-23.5,12.1-32c-1.3,3.9-2,8-2,12.4
      c0,21.2,17.3,38.5,38.5,38.5h9.5v-9.6H61c-15.9,0-28.9-13-28.9-28.9s13-28.9,28.9-28.9v0c26.8,0,48.6,21.8,48.6,48.6
      C109.6,76.1,105,87.3,97.5,95.9z"/>
    <path id="XMLID_38_" class="save_s" fill="#FFFFFF" d="M144,35.2h-1c-1.8,0-3.5-1.3-4.2-3.3l-0.2-0.5l-2.3,0.9l0.2,0.5c1.1,2.9,3.5,4.8,6.3,4.9v0
      h0.3h1h0.2v0c3.8-0.1,6.9-3.7,6.9-8.2c0-2.5-0.9-5.9-5.2-8l-1.6-0.8c-2.9-1.5-5-2.8-5-6c0-2.3,1.5-4.8,4.1-4.8h1
      c1.8,0,3.3,1.2,4.1,3.1l0.2,0.5l2.3-1l-0.2-0.5c-1.2-2.8-3.7-4.6-6.4-4.6v0h-0.1h-1h-0.2v0c-3.7,0.1-6.5,3.2-6.5,7.2
      c0,4.6,3.1,6.6,6.3,8.3l1.7,0.8c2.5,1.2,3.8,3.1,3.8,5.7C148.7,32.6,146.6,35.2,144,35.2z"/>
    <polygon id="XMLID_39_" fill="#FFFFFF" points="219.3,34.6 209.5,34.6 209.5,22.7 218.5,22.7 218.5,20.3 209.5,20.3 209.5,10.6 
      219.3,10.6 219.3,8.1 207,8.1 207,37.1 219.3,37.1"/>
    <path id="XMLID_42_" fill="#FFFFFF" d="M158.9,29.6h15.6l3.5,7.5h2.8L166.7,7.1l-14,29.9h2.8L158.9,29.6z M166.7,13l6.6,14.1H160
      L166.7,13z"/>
    <path id="XMLID_43_" fill="#FFFFFF" d="M228.9,111.6c0,3.6-2.9,6.5-6.5,6.5s-6.5-2.9-6.5-6.5v-1.9h-2.5v1.9c0,5,4.1,9,9,9
      c5,0,9-4.1,9-9V90.9h-2.5V111.6z"/>
    <path id="XMLID_46_" fill="#FFFFFF" d="M149,91h-9.9h-1.5h-1v28.9h2.5v-11.2h9.9c4.9,0,8.8-4,8.8-8.8C157.8,94.9,153.9,91,149,91z
       M149,106.2h-9.9V93.5h9.9c3.5,0,6.3,2.8,6.3,6.3C155.3,103.3,152.5,106.2,149,106.2z"/>
    <path id="XMLID_49_" fill="#FFFFFF" d="M195.9,90.3L195.9,90.3l-0.9,0h-0.5h0c-8.3,0-15.1,6.8-15.1,15.1c0,8.3,6.8,15.1,15.1,15.1
      h0h0.5h0.9v0c7.9-0.4,14.3-7,14.3-15.1C210.2,97.3,203.8,90.8,195.9,90.3z M195.1,118h-0.5h0c-7,0-12.6-5.7-12.6-12.6
      c0-7,5.7-12.6,12.6-12.6h0h0.5c7,0,12.6,5.7,12.6,12.6C207.7,112.3,202,118,195.1,118z"/>
    <polygon id="XMLID_50_" fill="#FFFFFF" points="236.7,119.9 249,119.9 249,117.4 239.2,117.4 239.2,105.6 248.2,105.6 
      248.2,103.1 239.2,103.1 239.2,93.4 249,93.4 249,90.9 236.7,90.9     "/>
    <path id="XMLID_53_" fill="#FFFFFF" d="M176.2,99.8c0-4.9-4-8.8-8.8-8.8h-2.9h-1.3H162v28.9h2.5v-11.2h1.5l6.8,11.2h2.9l-6.9-11.4
      C173,107.8,176.2,104.2,176.2,99.8z M167.4,106.2h-2.9V93.5h2.9c3.5,0,6.3,2.8,6.3,6.3C173.7,103.3,170.9,106.2,167.4,106.2z"/>
    <polygon id="XMLID_54_" fill="#FFFFFF" points="283.8,93.4 290.7,93.4 290.7,119.9 293.2,119.9 293.2,93.4 300.1,93.4 300.1,90.9 
      283.8,90.9    "/>
    <polygon id="XMLID_55_" fill="#FFFFFF" points="197.5,51.9 197.5,49.4 185.1,49.4 185.1,78.4 197.5,78.4 197.5,75.9 187.6,75.9 
      187.6,64.1 196.7,64.1 196.7,61.6 187.6,61.6 187.6,51.9    "/>
    <polygon id="XMLID_56_" fill="#FFFFFF" points="224.8,75.9 214.9,75.9 214.9,64.1 224,64.1 224,61.6 214.9,61.6 214.9,51.9 
      224.8,51.9 224.8,49.4 212.4,49.4 212.4,78.4 224.8,78.4    "/>
    <polygon id="XMLID_57_" fill="#FFFFFF" points="270.4,75.9 260.5,75.9 260.5,64.1 269.5,64.1 269.5,61.6 260.5,61.6 260.5,51.9 
      270.4,51.9 270.4,49.4 258,49.4 258,78.4 270.4,78.4    "/>
    <polygon id="XMLID_58_" fill="#FFFFFF" points="250,72.4 230.1,48.4 230.1,78.4 232.6,78.4 232.6,55.4 252.5,79.4 252.5,49.5 
      250,49.5    "/>
    <path id="XMLID_61_" fill="#FFFFFF" d="M278.2,67.2h1.5l6.8,11.2h2.9L282.6,67c4.2-0.7,7.4-4.3,7.4-8.7c0-4.9-4-8.8-8.8-8.8h-2.9
      h-1.3h-1.2v28.9h2.5V67.2z M278.2,52h2.9c3.5,0,6.3,2.8,6.3,6.3c0,3.5-2.8,6.3-6.3,6.3h-2.9V52z"/>
    <polygon id="XMLID_62_" fill="#FFFFFF" points="179.6,78.4 179.6,49.4 177.1,49.4 177.1,61.6 159,61.6 159,49.4 156.5,49.4 
      156.5,78.4 159,78.4 159,64.1 177.1,64.1 177.1,78.4    "/>
    <polygon id="XMLID_63_" fill="#FFFFFF" points="142.7,78.4 145.2,78.4 145.2,51.9 152.1,51.9 152.1,49.4 145.2,49.4 142.7,49.4 
      135.8,49.4 135.8,51.9 142.7,51.9    "/>
    <path id="XMLID_64_" fill="#FFFFFF" d="M312.4,66.5h8.7c-1.2,5.8-6.4,10.1-12.3,10.1h-0.6c-7,0-12.6-5.7-12.6-12.6
      c0-7,5.7-12.6,12.6-12.6h0.6c3.5,0,7,1.5,9.4,4.2l0.3,0.3l2.2-1.2l-0.4-0.5c-2.7-3.1-6.5-5-10.6-5.2l-1.4,0
      c-8.3,0-15.1,6.8-15.1,15.1c0,8.3,6.8,15.1,15.1,15.1h0.9l0.5,0v0c7-0.4,12.8-5.6,14-12.5l0.1-1.3V64h-11.3V66.5z"/>
    <path id="XMLID_65_" fill="#FFFFFF" d="M281,107.1c-0.9,6.2-6.2,10.9-12.5,10.9h-0.6c-7,0-12.6-5.7-12.6-12.6
      c0-7,5.7-12.6,12.6-12.6h0.6c3.5,0,7,1.5,9.4,4.2l0.3,0.3l2.2-1.2l-0.4-0.5c-2.7-3.1-6.5-5-10.6-5.2l-1.4,0
      c-8.3,0-15.1,6.8-15.1,15.1c0,8.3,6.8,15.1,15.1,15.1h0.9l0.5,0v0c7.2-0.4,13.2-6,14.1-13.2l0.1-0.6h-2.5L281,107.1z"/>
    <polygon id="XMLID_66_" fill="#FFFFFF" points="203.4,8.1 200.7,8.1 189.5,31.9 178.3,8.1 175.5,8.1 189.5,37.8    "/>
    <polygon id="XMLID_67_" fill="#FFFFFF" points="340.2,49.5 333,64.9 325.8,49.5 323,49.5 331.6,67.8 331.7,68.5 331.7,78.4 
      334.2,78.4 334.2,68.5 334.4,67.8 343,49.5     "/>
</svg>
  </div>
</div>


<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="/assets/js/index.js"></script>
<?php wp_footer(); ?>

</body>
</html>
