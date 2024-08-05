<?php $this->layout('template', ['title' => 'Haku']) ?>

<div class="content_box">
  <h2 class="form_title">Lisää hakusana</h2>
  <form action="" method="POST" class="form">
      <svg class="form_item_1 icon" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"><path d="M12.237 7a4.999 4.999 0 10-9.998-.001 4.999 4.999 0 009.998 0zm-.965 5.096A6.498 6.498 0 01.739 7 6.497 6.497 0 017.237.5a6.498 6.498 0 015.096 10.533l4.184 4.184a.75.75 0 01-1.06 1.06l-4.186-4.181z"/></svg>
      <input id="hakusana" type="text" name="hakusana" placeholder="Hae sanaa" class="form_item_2 input_field">
      <span class="screen-reader-text">
      Suurennuslasi ikoni</span>
      <svg class="form_item_3 icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" height="800px" width="800px" version="1.1" id="Layer_1" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
      <path id="Mail" d="M58.0034485,8H5.9965506c-3.3136795,0-5.9999995,2.6862001-5.9999995,6v36c0,3.3137016,2.6863203,6,5.9999995,6  h52.006897c3.3137016,0,6-2.6862984,6-6V14C64.0034485,10.6862001,61.3171501,8,58.0034485,8z M62.0034485,49.1108017  L43.084549,30.1919994l18.9188995-12.0555992V49.1108017z M5.9965506,10h52.006897c2.2056007,0,4,1.7943001,4,4v1.7664003  L34.4677505,33.3134003c-1.4902,0.9492989-3.3935013,0.9199982-4.8495998-0.0703011L1.9965508,14.4694996V14  C1.9965508,11.7943001,3.7910507,10,5.9965506,10z M1.9965508,16.8852005L21.182251,29.9251003L1.9965508,49.1108017V16.8852005z   M58.0034485,54H5.9965506c-1.6473999,0-3.0638998-1.0021019-3.6760998-2.4278984l20.5199013-20.5200024l5.6547985,3.843401  c1.0859013,0.7383003,2.3418007,1.1083984,3.5995998,1.1083984c1.1953011,0,2.3925018-0.3339996,3.4463005-1.0048981  l5.8423996-3.7230015l20.2961006,20.2961025C61.0673485,52.9978981,59.6508713,54,58.0034485,54z"/>
      </svg>
      <input id="email" type="text" name="email" placeholder="Lisää sähköposti" class="form_item_4 input_field">
      <span class="screen-reader-text">
      Sähköposti ikoni</span>
      <input type="submit" name="laheta" value="Lisää haku" class="form_item_5 button">
  </form>
</div>