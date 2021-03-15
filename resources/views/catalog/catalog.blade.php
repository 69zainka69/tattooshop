@extends('layouts.main')

@section('title', 'Каталог Tattoo Room')
@section('description', 'Каталог продукции Tattoo Room - магазин для тату-мастера')

@section('head')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/carousel.css" rel="stylesheet">
<link href="/css/mobile.css" rel="stylesheet">
<link href="/css/cheatsheet.css" rel="stylesheet"> 
@endsection



  @section('content')

  <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
            <div class="blocktitle"><p class="title-block parentcategory"><a href="/mashinki">ТАТУ МАШИНКИ</a></p>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/subcategories/zapchasti_dlya_mashinok.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Запчасти для машинок</p>
                        <div class="btn-group">
                       <a href="/mashinki/zapchasti_dlya_mashinok" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/subcategories/induction_mashinki.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Индукционные машинки</p>
                        <div class="btn-group">
                        <a href="/mashinki/induction_mashinki" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/subcategories/rotornyi_mashinki.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Роторные машинки</p>
                        <div class="btn-group">
                        <a href="/mashinki/rotornyi_mashinki" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/subcategories/module_mashinki.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Модульные машинки</p>
                        <div class="btn-group">
                        <a href="/mashinki/module_mashinki" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
            <div class="blocktitle"><p class="title-block parentcategory"><a href="/nabori">ТАТУ НАБОРЫ</a></p>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">С Индукционной машинкой</p>
                        <div class="btn-group">
                       <a href="/nabori/induction_nabor" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">С роторной / модульной машинкой</p>
                        <div class="btn-group">
                        <a href="/nabori/rotorniy_nabor" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
            <div class="blocktitle"><p class="title-block parentcategory"><a href="/kraski/">ТАТУ КРАСКИ</a></p>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">World famous Ink</p>
                        <div class="btn-group">
                       <a href="/kraski/world_famous_ink" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Eternal Ink</p>
                        <div class="btn-group">
                        <a href="/kraski/eternal_ink" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Intenze Ink</p>
                        <div class="btn-group">
                        <a href="/kraski/intenze_ink" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Bishop Nocturnal Ink</p>
                        <div class="btn-group">
                        <a href="/kraski/bishop_nocturnal_ink" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Allegory Ink</p>
                        <div class="btn-group">
                        <a href="/kraski/allegory_ink" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Dynamik Ink</p>
                        <div class="btn-group">
                        <a href="/kraski/dynamik_ink" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">SilverBack Ink</p>
                        <div class="btn-group">
                        <a href="/kraski/silverback_ink" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Perma Blend Ink</p>
                        <div class="btn-group">
                        <a href="/kraski/perma_blend_ink" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Разбавители пигментов</p>
                        <div class="btn-group">
                        <a href="/kraski/razbaviteli_pigmentov" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Наборы красок</p>
                        <div class="btn-group">
                        <a href="/kraski/nabory_krasok" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>




          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
            <div class="blocktitle"><p class="title-block parentcategory"><a href="/derjateli">ДЕРЖАТЕЛИ</a></p>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Модульные для картриджей</p>
                        <div class="btn-group">
                       <a href="/derjateli/modulnyye_dlya_kartridzhey" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Алюминевые</p>
                        <div class="btn-group">
                        <a href="/derjateli/alyuminiyevyye" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Стальные</p>
                        <div class="btn-group">
                        <a href="/derjateli/stalnyye" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Бандажная обмотка</p>
                        <div class="btn-group">
                        <a href="/derjateli/bandazhnaya_obmotka" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Насадки на держатели</p>
                        <div class="btn-group">
                        <a href="/derjateli/nasadki_na_derzhateli" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Держатели для Hand Poke</p>
                        <div class="btn-group">
                        <a href="/derjateli/dlya_hand_poke" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Стерильные держатели с трубкой</p>
                        <div class="btn-group">
                        <a href="/derjateli/sterilnyye_derzhateli_s_trubkoy" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Толкатель для модульного держателя</p>
                        <div class="btn-group">
                        <a href="/derjateli/tolkatel_dlya_modulnogo_derzhatelya" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
            <div class="blocktitle"><p style="width: 290px;" class="title-block parentcategory"><a href="/silovoye">СИЛОВОЕ ОБОРУДОВАНИЕ</a></p>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Блоки питания</p>
                        <div class="btn-group">
                       <a href="/silovoye/bloki_pitaniya" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Клип-корды</p>
                        <div class="btn-group">
                        <a href="/silovoye/clip-cords" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Педали</p>
                        <div class="btn-group">
                        <a href="/silovoye/pedali" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Мойки/Ультрасоники</p>
                        <div class="btn-group">
                        <a href="/silovoye/moyki" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
            <div class="blocktitle"><p style="width: 290px;" class="title-block parentcategory"><a href="/kartridzhi">МОДУЛЬНЫЕ КАРТРИДЖИ</a></p>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">EZ</p>
                        <div class="btn-group">
                       <a href="/kartridzhi/ez" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">KWADRON</p>
                        <div class="btn-group">
                        <a href="/kartridzhi/kwadron" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Da Vinci</p>
                        <div class="btn-group">
                        <a href="/kartridzhi/da_vinci" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">CHEYENNE</p>
                        <div class="btn-group">
                        <a href="/kartridzhi/cheyenne" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Vlad Blad</p>
                        <div class="btn-group">
                        <a href="/kartridzhi/vlad_blad" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">BigWasp Gray</p>
                        <div class="btn-group">
                        <a href="/kartridzhi/bigwasp_gray" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">FAVICON PMU</p>
                        <div class="btn-group">
                        <a href="/kartridzhi/favicon_pmu" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">MAST PRO PMU</p>
                        <div class="btn-group">
                        <a href="/kartridzhi/mast_pro_pmu" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
            <div class="blocktitle"><p class="title-block parentcategory"><a href="/igly">ТАТУ ИГЛЫ</a></p>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">MakeTattoo</p>
                        <div class="btn-group">
                       <a href="/igly/maketattoo" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">KWADRON</p>
                        <div class="btn-group">
                        <a href="/igly/kwadron_igla" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Hydra</p>
                        <div class="btn-group">
                        <a href="/igly/hydra" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">КИТАЙ</p>
                        <div class="btn-group">
                        <a href="/igly/china" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Одноразовые иглы с держателем</p>
                        <div class="btn-group">
                        <a href="/igly/odnorazovyye_igly" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
            <div class="blocktitle"><p class="title-block parentcategory"><a href="/nakonechniki">НАКОНЕЧНИКИ</a></p>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Стерильные одноразовые (White Tips)</p>
                        <div class="btn-group">
                       <a href="/nakonechniki/white_tips" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Стерильные одноразовые (Прозрачные)</p>
                        <div class="btn-group">
                        <a href="/nakonechniki/prozrachnye_nakonechniki" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Стальные</p>
                        <div class="btn-group">
                        <a href="/nakonechniki/stalnye" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
            <div class="blocktitle"><p class="title-block parentcategory"><a href="/zashchita_i_ukhod">ЗАЩИТА И УХОД</a></p>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Анестезия</p>
                        <div class="btn-group">
                       <a href="/zashchita_i_ukhod/anesteziya" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Вазелин</p>
                        <div class="btn-group">
                        <a href="/zashchita_i_ukhod/vazelin" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Дезинфекция и антисептики</p>
                        <div class="btn-group">
                        <a href="/zashchita_i_ukhod/dezinfektsiya-i-antiseptiki-peny" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Заживляющая пленка</p>
                        <div class="btn-group">
                        <a href="/zashchita_i_ukhod/zazhivlyayushchaya-plenka" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Защита и перчатки</p>
                        <div class="btn-group">
                        <a href="/zashchita_i_ukhod/zashchita-i-perchatki" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Мази и крема</p>
                        <div class="btn-group">
                        <a href="/zashchita_i_ukhod/mazi-i-krema" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="album py-5 bg-light" style="background-color: #ffffff !important;">
            <div class="container">
            <div class="blocktitle"><p class="title-block parentcategory"><a href="/raznoe">РАЗНОЕ</a></p>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Аксессуары</p>
                        <div class="btn-group">
                       <a href="/raznoe/aksessuary" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Емкости, Батлы, Распылители</p>
                        <div class="btn-group">
                        <a href="/raznoe/emkosti_batly_raspyliteli" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Искусственная кожа</p>
                        <div class="btn-group">
                        <a href="/raznoe/iskusstvennaya_kozha" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col">
                  <div class="card shadow-sm" style="text-align:center;">
                    <img style="margin-left:auto; margin-right:auto;" src="/img/catalog/mashinki/induction_mashinki/induktsionnaya_tatu_mashinka_Skull_Shader_Black.jpg" width="200" height="200">
                    <div class="card-body">
                      <p class="card-text">Колпачки (капсы)</p>
                        <div class="btn-group">
                        <a href="/raznoe/kolpachki_kapsy" class="btn btn-sm btn-outline-secondary">просмотреть товары</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    <!-- END CARS TOVAR  --> 
    @endsection
         