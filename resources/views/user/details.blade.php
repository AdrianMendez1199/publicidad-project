@extends('layouts.app')

<style>
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
</style>

@section('content')

<div class="container header">
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

      <div class="profile-header-dt">
              <span class="valuecolumn">
                  <span>55</span>
                 <div>
                   <p>kg</p>
                 </div>
             </span>

             <span class="valuecolumn">
                <span>{{ $user->user_details->height }}</span>
               <div>
                 <p>cm</p>
               </div>
           </span>


           <span class="valuecolumn">
              <span>{{ $user->user_details->height }}</span>
             <div>
               <p>cm</p>
             </div>
         </span>
</div>
<div class="card-container mt-5">
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
</div>


@endsection