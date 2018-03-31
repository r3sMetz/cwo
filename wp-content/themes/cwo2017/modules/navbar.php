<nav class="navbar cwo-navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <!-- Burger Button -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand font-heat fontsize-headline fadeLink"  href="<?=home_url();?>">CWO</a>
    </div>

    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right font-heat fontsize-bigger">
        <?foreach(r3_getMenue('HauptmenuDE') as $item):?>
        <li>
            <a
                class="<?=$item->classes[0]? $item->classes[0] : 'fadeLink';?> whiteLink <?menueActive($item->object_id,get_the_ID());?>"
                href="<?=$item->url;?>">
                <?=$item->title;?>
            </a>
        </li>
        <?endforeach;?>
      </ul>
    </div>
  </div>
</nav>