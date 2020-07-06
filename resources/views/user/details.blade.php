@extends('layouts.app')

<style>  
.body {
    margin: 0 250px;
    border-left: 1px solid #f8c1cf;
    border-right: 1px solid #f8c1cf;
}
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

.girlsingle .thumbs .profile-video-thumb-wrapper, .girlsingle .thumbs .profile-img-thumb-wrapper {
    width: 20%;
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


/* TO REVIEW **/
.sidebar-right {
    float: right;
    /* margin-left: -250px; */
}
.sidebar-left, .sidebar-right {
    width: 250px;
    word-wrap: break-word;
    overflow: hidden;
}

.sidebar-right .quicksearch {
    background-color: #e0006c;
    padding: 20px;
    color: #fff;
}

.sidebar-right .quicksearch h4 {
    padding-bottom: 10px;
}

.sidebar-left {
    margin-left: -100%;
}
.sidebar-left, .sidebar-right {
    width: 250px;
    word-wrap: break-word;
    overflow: hidden;
}

.form-styling .form-input.col100 {
    width: 100%;
}
.form-styling .form-input {
    width: 64%;
    float: right;
}
.col100 {
    width: 100% !important;
}

.sidebar-right .quicksearch .form-input select {
    color: #286c9b;
    cursor: pointer;
    padding: 2px;
}

.sidebar-right .quicksearch .select2 {
    width: 100% !important;
}
.form-styling .form-input select {
    padding: 8px;
    font-size: 1em;
    cursor: pointer;
}

.sidebar-right .quicksearch .select2 {
    width: 100% !important;
}
.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
}

.sidebar-right .quicksearch .formseparator {
    height: 10px;
}

.form-styling .formseparator {
    clear: both;
    height: 30px;
}

.sidebar-right .quicksearch .submit-button {
    border: none;
    font-size: 1em;
    font-weight: 700;
}

.form-styling input[type=submit] {
    font-size: 1.2em;
    line-height: 2em;
    padding: 0 20px;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    border-radius: 25px;
    font-weight: 600;
}

.sidebar-right .quicksearch .adv {
    color: #fdd1ef;
}
.sidebar-right .quicksearch a {
    color: #e0006c;
    text-decoration: none;
    cursor: pointer;
}

.blueishbutton {
    background: #eff8ff;
    color: #e0006c;
    border: 1px #fe5acb solid;
}

.testing {
  display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    justify-content: center;
    align-items: center;
}
</style>

@section('content') 
<div class="sidebar-right">
  @include('user.search')
</div>
    <div class="body">
      <div class="bodybox profile-page">
        <div class="girlsingle" itemscope="" itemtype="http://schema.org/Person">
          <div class="profile-header">
            <div class="profile-header-name l">
              <h3 class="profile-title" title="Cindy and Brooks" itemprop="name">{{ $user->name  }}</h3>
            </div>
            <div class="profile-header-name-info rad5 r">
              <div class="section-box"><span class="valuecolumn">167</span><b>cm</b></div>
              <div class="section-box"><span class="valuecolumn">70</span><b>kg</b></div>
              <div class="section-box"><span class="valuecolumn">32</span><b>years</b></div>
            </div>
            <div class="phone-box r">
              <div class="label">
                call me
              </div> 
              <a class="" href={{ $user->user_details->phone  }} itemprop="telephone">
                <span class="icon icon-phone"></span>
                {{ $user->user_details->phone  }}
              </a>
            </div>
            <div class="clear10"></div>
          </div>
          <div class="clear10"></div>
          <div class="thumbs testing" style="max-height: auto; max-width: 600px;">
            @foreach ($user->userimages as $key => $data)
            <div class="profile-img-thumb-wrapper col-4">
              <div class="profile-img-thumb" id="9271" itemprop="image" itemscope="" itemtype="http://schema.org/ImageObject">
                <a href="#"
                  data-fancybox="profile-photo" itemprop="contentURL">
                  <img class="rounded mx-auto d-block" alt={{ $user->name }}
                    itemprop="thumbnailUrl"
                    src={{ asset($data->file) }} />
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
            <div class="clear5"></div> {{ $user->user_details->description  }}
            <div class="clear"></div>
          </div>
          <div class="clear10"></div>
        </div>
      </div>
    </div>
  
@endsection 