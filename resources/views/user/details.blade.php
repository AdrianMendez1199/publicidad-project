@extends('layouts.app')

{{-- <style>
  .header {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    background-color: #fff0f4;
    height: auto;
   width: 400px;
  }

.section-box {
  color: #fe5acb;
}

.valuecolumn span {
  font-weight: bold;
  margin: 8px;
}

.profile-header-dt {
  display: flex;
  text-align: center;
  background: white;
  height: 80px;
  border-radius: 10%;
}
.valuecolumn p  {
  color: gray;
  margin: 5px;
}
.valuecolumn span {
  color: #fe5acb;
}


.card-container {
  /* max-width: 800px; */
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  cursor: zoom-in;
}

.jumbotron {
  text-align: left;
  width: 94% !important;
  background: white !important;
  padding: 20px;
  box-shadow: 0 0 20px #e5006a;
  margin: 8px;
  border-radius: 15px !important;
}


.jumbotron h4, .jumbotron  h4 {
    color: #e0006c;
    padding-left: 10px;
    margin-bottom: 10px;
    cursor: default;
    font-size: 1.5em;
    border-left: 3px solid #e0006c;
    text-transform: uppercase;
    font-size: 1.1em;
    font-weight: 700;
}
.aboutme {
  width: 800px;
  height: 800px;
  background: white;
}


.girlsingle .profile-header .profile-header-name-info {
    background: #fff !important;
    padding: 10px 0 !important;
}

.r {
    float: right !important;
}

.rad5 {
    -webkit-border-radius: 5px !important;
    -moz-border-radius: 5px !important;
    border-radius: 5px !important;
}

.girlsingle .profile-header .profile-header-name-info .section-box {
    float: right;
    text-align: center;
    padding: 0 20px;
} --}}
{{-- </style> --}}

<style>

  
.bodybox {
    background-color: #fff0f4;
    padding: 20px;
    overflow: hidden;
    border-bottom: 1px solid #f8c1cf;
}

.girlsingle {
    color: #260b39;
}
.girlsingle {
    position: relative;
}

.l {
    float: left;
}

.girlsingle .profile-header .profile-header-name-info {
    background: #fff;
    padding: 10px 0;
}
.r {
    float: right;
}
.rad5 {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}

.girlsingle .profile-header .profile-header-name-info .section-box {
    float: right;
    text-align: center;
    padding: 0 20px;
}

.girlsingle .profile-header .profile-header-name-info .section-box .valuecolumn {
    color: #fe5acb;
    font-weight: 700;
    font-size: 1.7em;
    display: block;
    width: 100%;
    line-height: 1em;
    letter-spacing: -1.5px;
}

.girlsingle .profile-header .profile-header-name-info .section-box b {
    display: block;
    width: 100%;
    font-size: .9em;
    color: #8c7d90;
    font-weight: 400;
}

.girlsingle .profile-header .phone-box {
    padding-top: 15px;
    padding-right: 20px;
    font-weight: 700;
    text-align: center;
}


.girlsingle .profile-header .phone-box .label {
    font-size: 1em;
    font-weight: 400;
    color: #8c7d90;
    cursor: default;
    line-height: .5em;
}

.girlsingle .profile-header .phone-box a {
    font-size: 1.7em;
    color: #d633a3;
}

.clear10 {
    clear: both;
    height: 10px;
}
.girlsingle .thumbs {
    width: 100%;
    text-align: center;
}

@media (max-width: 1550px){
.girlsingle .thumbs .profile-video-thumb-wrapper, .girlsingle .thumbs .profile-img-thumb-wrapper {
    width: 20%;
}
}

.girlsingle .thumbs .profile-video-thumb-wrapper, .girlsingle .thumbs .profile-img-thumb-wrapper {
    width: 16.66%;
    padding-right: 4px;
    padding-bottom: 4px;
    float: left;
}

.girlsingle .thumbs .profile-img-thumb {
    position: relative;
}
.girlsingle a {
    color: #e0006c;
}
.girlsingle .thumbs .profile-img-thumb img {
    width: 100%;
    cursor: zoom-in;
}
.girlsingle .thumbs img {
    float: left;
}

.rad3 {
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

.girlsingle .aboutme {
    background: #fff;
    padding: 20px;
}

.clear5 {
    clear: both;
    height: 5px;
}

.clear20 {
    clear: both;
    height: 20px;
}

.girlsingle .profile-title {
    font-size: 2em;
    color: #fe5acb;
    cursor: default;
}
.bodybox h3 {
    font-size: 1.5em;
    font-weight: 400;
    padding-bottom: 10px;
    position: relative;
    color: #e0006c;
    text-align: center;
}

.girlsingle h4, .girlsingle .aboutme h4, .clientreviewtext h4 {
    color: #e0006c;
    padding-left: 10px;
    margin-bottom: 10px;
    cursor: default;
    font-size: 1.5em;
    border-left: 3px solid #e0006c;
    text-transform: uppercase;
    font-size: 1.1em;
    font-weight: 700;
}
</style>

@section('content')

{{-- <div class="container header">
    <div class="profile-header">
      <div class="profile-header-name l"> 
       <h4 class="profile-title">{{ $user->name }}</h4>           
      </div>
    </div>

    <div class="profile-header">
        <div class="profile-header-name l"> 
         <h4 class="profile-title">{{ $user->whatsapp }}</h4>           
        </div>
      </div>



      <div class="profile-header-name-info rad5 r">
        <div class="section-box">
          <span class="valuecolumn">167</span>
          <b>cm</b>
        </div>
          <div class="section-box">
            <span class="valuecolumn">70</span><b>kg</b>
          </div>
          <div class="section-box">
        <span class="valuecolumn">32</span><b>years</b>
      </div>
    </div>

      {{-- <div class="profile-header-dt">
              <span class="valuecolumn">
                  <span>{{ $user->user_details->weight }}</span>
                 <div>
                   <p>years</p>
                 </div>
             </span>

             <span class="valuecolumn">
                <span>{{ $user->user_details->height }}</span>
               <div>
                 <p>cm</p>
               </div>
           </span>


           <span class="valuecolumn">
              <span>{{ $user->user_details->weight }}</span>
             <div>
               <p>cm</p>
             </div>
         </span>
</div> --}}
{{-- <div class="card-container mt-5">
    @foreach ($user->userimages as $key => $data)
      <div class="card ml-2 mb-2" style="width:15%;">
        <img class="card-img" 
         style="width:100%"
         src="{{ asset($data->file) }}"
         alt="Card image">                  
      </div>
    @endforeach
    </div>
    <div class="jumbotron">
        <h4 class="display-4">Sobre mi:</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
      </div>
</div> --}}





<div class="bodybox profile-page">
  <div class="girlsingle" itemscope="" itemtype="http://schema.org/Person">
    <div class="profile-header">
      <div class="profile-header-name l">
        <h3 class="profile-title" title="Cindy and Brooks" itemprop="name">{{ $user->name  }}</h3>
        {{-- <div class="girlsinglelabels"> <span class="orangebutton rad25">PREMIUM</span></div> --}}
      </div>
      <div class="profile-header-name-info rad5 r">
        <div class="section-box"><span class="valuecolumn">167</span><b>cm</b></div>
        <div class="section-box"><span class="valuecolumn">70</span><b>kg</b></div>
        <div class="section-box"><span class="valuecolumn">32</span><b>years</b></div>
      </div>
      <div class="phone-box r">
        <div class="label">call me</div> <a class="" href="tel:555 1234 567" itemprop="telephone"><span
            class="icon icon-phone"></span>{{ $user->user_details->phone  }}</a>
      </div>
      <div class="clear10"></div>
    </div>
    <div class="clear10"></div>
    <div class="thumbs" itemscope="" itemtype="http://schema.org/ImageGallery">
      @foreach ($user->userimages as $key => $data)
      <div class="profile-img-thumb-wrapper">
        <div class="profile-img-thumb" id="9271" itemprop="image" itemscope="" itemtype="http://schema.org/ImageObject">
          <a href="#"
            data-fancybox="profile-photo" itemprop="contentURL"><img
              data-original-url="https://escortwp.com/demo/wp-content/uploads/demo15786985966408/15786985967707-280x415.jpg"
              class="mobile-ready-img rad3" alt="Cindy and Brooks"
              data-responsive-img-url="https://escortwp.com/demo/wp-content/uploads/demo15786985966408/15786985967707-400x601.jpg"
              itemprop="thumbnailUrl"
              src="{{ asset($data->file) }}"
            </a>
        </div>
      </div>
      @endforeach
  
    </div>
    <div class="clear20"></div>
    <div class="aboutme">
    <h4>Sobre Mi:</h4> <b> {{ strtotime($user->user_details->date_of_birth, date('ymd')) - date('ymd') }} 
      <span itemprop="gender">{{ ucfirst($user->user_details->gender) }}</span>,
         Soy de: <a
          href="#" title={{ $user->user_details->province->province }}>{{ $user->user_details->province->province }}</a>, <a
          href="#" title={{ $user->user_details->country->province }}>{{ $user->user_details->country->country }}</a></b>
      <div class="clear5"></div> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in quam pretium,
      sodales velit id, aliquet dui. Vivamus nunc augue, elementum vel nulla sit amet, scelerisque aliquet sapien.
      Vestibulum non commodo urna. Sed tempus lacus ac quam pharetra dapibus. Ut sollicitudin odio vitae nisi rhoncus
      finibus. Nam pharetra rutrum mauris, a ultricies quam varius sed. Sed sodales felis magna, in cursus orci
      vulputate at. Maecenas semper eros eu eros lacinia, ut pellentesque massa tincidunt.<br><br>Integer tempus justo
      at lectus convallis, at vestibulum purus placerat. Ut ultrices enim non elit molestie fringilla ac sed sem. Fusce
      efficitur nibh nec congue dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum sed
      magna eu posuere. Vestibulum facilisis ultricies risus quis venenatis. Fusce sed porttitor sapien. Suspendisse at
      sapien finibus nulla rhoncus fringilla at non eros.<br><br>Vestibulum egestas interdum lectus. Donec mollis
      sodales magna, ac facilisis ligula lacinia eu. Nunc pretium, massa ac efficitur venenatis, tellus nibh faucibus
      metus, id pharetra sapien eros nec nisl. Maecenas sed fermentum nisl. Cras dui lectus, lobortis finibus odio
      feugiat, scelerisque vulputate arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut ex nisi.
      <div class="clear"></div>
    </div>
    <div class="clear10"></div>
  </div>
</div>

@endsection 