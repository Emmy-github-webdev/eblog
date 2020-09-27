<?php $__env->startSection('title', 'The most visit blog site in the world'); ?>
<?php $__env->startSection('data-page-id', 'home'); ?>


<?php $__env->startSection('content'); ?>
<div class="home">
    <div class="row">
      
        <div class="medium-5 columns">
          <section class="display-featured" id="root">
            <h2>Featured</h2>
            <div v-for="feature in featured">
              <a :href="'/article/' + feature.id">
                <div ><img class="thumbnail" :src="'/' + feature.image_path" style="width: 100%; height: 290px;" alt="main article image"></div>
                <p><b> {{ feature.title}}</b> -
                {{ stringLimit(feature.content, 80)}}</p>
              </a>
            </div>
          </section>
        </div>

        <div class="medium-4 columns">
          <section class="disply-justin" id="justin">
            <h2>Just In</h2>
            <div v-for="juste in justin">
              <a :href="'/article/' + juste.id">
                <p>{{ stringLimit(juste.title, 32)}}
                  {{(juste.created_at)}}
                </p>
              </a>
            </div>
          </section>
        </div>
    
        <div class="medium-3 columns">
          <section class="disply-advert">
          <h2>Advert</h2> 
          </section>
        </div>

        <div class="medium-3 columns">
        <p><a href="https://www.gloworld.com/ng/personal/voice-sms/glo-11ks-prepaid-plan/?utm_source=eskimi&utm_medium=cpc&utm_campaign=11k" target="_blank"><img src="/images/advert/Glo-advert.gif" alt="article promo image"  width="100%"></a></p>
        </div>

        <div class="medium-3 columns">
        <p><a href="http://www.nlpcpfa.com/" target="_blank"><img src="/images/advert/ins.jpeg" alt="article promo image"></a></p>
        </div>
        </section>
    </div>
    <hr>

    <div class="row columns">
      <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
        <a href="https://www.total.com.ng/" target="_blank"><img src="images/advert/service_station-total.jpg" alt=""></a>
      </div>
    </div>
    <br> <br>

    <div class="row column">
    <h4 style="margin: 0;" class="text-center">BREAKING NEWS</h4>
  </div>

  <hr>

  <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="display-breakingnews" data-token="<?php echo e($token); ?>" id="breakingnews">
      <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="breake in breaking">
          <a :href="'/article/' + breake.id">
            <div class="card thumbnail" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + breake.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(breake.title, 58) }} </b>
          </a>
        </div>
      </div>
  </section>

  </div>

  <hr>

    <div class="row column">
    <a style="margin: 0;" class="text-center" href="https://brandlifedigital.com/mitsumi/?gclid=Cj0KCQjwqrb7BRDlARIsACwGad5ZORfogerouY3iR4vEFlzXBQ5kPFLSeRNpApp3f0oA2KyskRcc5JkaAoVKEALw_wcB" target="_blank"><img src="images/advert/mitsumi.png" alt=""></a>
    </div>


    <div class="row column">
      <h4 style="margin: 0;" class="text-center">LATEST STORIES</h4>
    </div>

    <hr>

    <div class="row">
      <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">

      <article>
        <section class="display-latest" id="latest">
          <div v-for="latested in latest">
            <a :href="'/article/' + latested.id">
          <div class="row">
            <div class="large-6 columns">
              <p><img :src="'/' + latested.image_path" width="100%" alt="article preview image"></p>
            </div>
            <div class="large-6 columns">
              <h5>'{{ latested.title }}</h5>
              <p>
                <span><i class="fi-torso"> By {{ latested.written }} &nbsp;&nbsp;</i></span>
                <span><i class="fi-calendar"> {{ latested.created_at }} &nbsp;&nbsp;</i></span>
              </p>
              <p>{{ stringLimit(latested.content, 80)}}</p>
            </div>
          </div>
          <hr>
          </a>
     </div>
   </section>

   <div class="row column">
    <h4 style="margin: 0;" class="text-center">HEALTH</h4>
   </div>

   <hr>

   <div class="row small-up-2 medium-up-3 large-up-5">

    <section class="display-healthnews" data-token="<?php echo e($token); ?>" id="healthnews">
      <div class="row medium-up-3 large-up-4">
        <div class="medium-12 column" v-cloak v-for="healths in health">
          <a :href="'/article/' + healths.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + healths.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(healths.title, 50) }} </b>
          </a>
        </div>
      </div>
    </section>

   </div>

   <hr>
   <div class="row column">
    <h4 style="margin: 0;" class="text-center">Relationship</h4>
   </div>

   <hr>

   <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="display-lifestylenews" data-token="<?php echo e($token); ?>" id="lifestylenews">
      <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="relation in relationship">
          <a :href="'/article/' + relation.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + relation.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(relation.title, 50) }} </b>
          </a>
        </div>
      </div>
    </section>

   </div>


   <hr>
   <div class="row column">
    <h4 style="margin: 0;" class="text-center">Technology</h4>
   </div>

   <hr>

   <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="display-technewsnews" data-token="<?php echo e($token); ?>" id="technews">
      <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="tech in technology">
          <a :href="'/article/' + tech.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + tech.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(tech.title, 50) }} </b>
          </a>
        </div>
      </div>
    </section>

   </div>
    
    </article>

      </div>

      <div class="large-4 columns">

        <aside>

          <div class="row small-up-1">

          <div class="column text-center">
            <a href="https://www.whogohost.com/host/cart.php?a=add&sld=enteryourdomain&tld=.ng&domain=register&utm_source=Google&utm_medium=Display&utm_campaign=.NG%20%20-%20Google%20Display%20Ad" target="_blank"><img src="images/advert/whogohost.png" alt=""></a>
          </div>
          </div>

          <br>

          <div class="row column">
          <a href="https://brandlifedigital.com/mitsumi/?gclid=Cj0KCQjwqrb7BRDlARIsACwGad5ZORfogerouY3iR4vEFlzXBQ5kPFLSeRNpApp3f0oA2KyskRcc5JkaAoVKEALw_wcB" target="_blank"><img src="images/advert/hp.png" alt=""></a>
          </div>

          <br>

          <div class="row column">
            <p><a href="https://uiyty.com/product/mens-casual-genuine-leather-comfortable-snow-shoes-ankle-boots/?gclid=EAIaIQobChMI25KR5--_6wIVBoGFCh3NggKhEAEYASAAEgKfPvD_BwE" target="_blank"><img src="images/advert/shoe-advert.jpg" alt="advertisement of ShamWow"></a></p>
          </div>

          <br>

          <div class="row column">
            <p><a href="https://www.volvocars.com/za?utm_source=DV360&utm_medium=Display_Banner&utm_campaign=Volvo_Q3_Awareness&utm_content=AlwaysOn&dclid=CjgKEAjwh7H7BRCDn4mWnI3w_QoSJAAITfcGth54d4P_fyUFyjg5yOp24yXyqLQRTCcYXXZdla4QX_D_BwE" target="_blank"><img src="images/advert/volvo.jpg" alt="advertisement of ShamWow"></a></p>
          </div>

        </aside>

      </div>
      <hr>
      
    <div class="row column">
    <h4 style="margin: 0;" class="text-center">POLITICS</h4>
  </div>

  <hr>

  <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="display-politics" data-token="<?php echo e($token); ?>" id="politics">
      <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="politic in politics">
          <a :href="'/article/' + politic.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + politic.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(politic.title, 58) }} </b>
          </a>
        </div>
      </div>
    </section>

  </div>
  <hr>
  <div class="row column">
    <h4 style="margin: 0;" class="text-center">BUSINESS</h4>
  </div>

  <hr>

  <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="display-business" data-token="<?php echo e($token); ?>" id="business">
      <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="busin in business">
          <a :href="'/article/' + busin.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + busin.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(busin.title, 58) }} </b>
          </a>
        </div>
      </div>
    </section>

  </div>

  <hr>
  <div class="row column">
    <h4 style="margin: 0;" class="text-center">SPORTS</h4>
  </div>

  <hr>

  <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="display-sport" data-token="<?php echo e($token); ?>" id="sport">
      <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="spor in sport">
          <a :href="'/article/' + spor.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + spor.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(spor.title, 58) }} </b>
          </a>
        </div>
      </div>
    </section>

  </div>

  <hr>
  <div class="row column">
    <h4 style="margin: 0;" class="text-center">Entertainments</h4>
  </div>

  <hr>

  <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="display-entertainment" data-token="<?php echo e($token); ?>" id="entertainment">
      <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="entertain in entertainment">
          <a :href="'/article/' + entertain.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + entertain.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(entertain.title, 58) }} </b>
          </a>
        </div>
      </div>
    </section>

  </div>

  <hr>
  <div class="row column">
    <h4 style="margin: 0;" class="text-center">Columns</h4>
  </div>

  <hr>

  <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="display-colu" data-token="<?php echo e($token); ?>" id="colum">
      <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="colu in colum">
          <a :href="'/article/' + colu.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + colu.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(colu.title, 58) }} </b>
          </a>
        </div>
      </div>
    </section>

  </div>

  <hr>
  <div class="row column">
    <h4 style="margin: 0;" class="text-center">Education</h4>
  </div>

  <hr>

  <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="display-education" data-token="<?php echo e($token); ?>" id="education">
      <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="educat in education">
          <a :href="'/article/' + educat.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + educat.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(educat.title, 58) }} </b>
          </a>
        </div>
      </div>
    </section>

  </div>

  <hr>
  <div class="row column">
    <h4 style="margin: 0;" class="text-center">metro plus</h4>
  </div>

  <hr>

  <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="display-metro" data-token="<?php echo e($token); ?>" id="metro">
      <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="metros in metro">
          <a :href="'/article/' + metros.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + metros.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(metros.title, 58) }} </b>
          </a>
        </div>
      </div>
    </section>

  </div>


  <hr>
  <div class="row column">
    <h4 style="margin: 0;" class="text-center">others</h4>
  </div>

  <hr>

  <div class="row small-up-2 medium-up-4 large-up-5">

    <section class="display-othernews" data-token="<?php echo e($token); ?>" id="othernews">
      <div class="row medium-up-2 large-up-4">
        <div class="medium-12 column" v-cloak v-for="othernew in others">
          <a :href="'/article/' + othernew.id">
            <div class="card" data-equalizer-watch>
            <div class="card-section">
            <img :src="'/' + othernew.image_path" width="100%" alt="image for article">
            </div>
            </div>
            <p><b>{{stringLimit(othernew.title, 58) }} </b>
          </a>
        </div>
      </div>
    </section>

  </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/home.blade.php ENDPATH**/ ?>