@extends('layouts.app')

<style>
  .header {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    background-color: #fff0f4;
    height: auto;
    width: 80%;
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
  justify-content: center;
  cursor: zoom-in;
}
</style>
@php
    // print_r($user->user_details);
          //  [id] => 86
          //   [height] => 121
          //   [hair_color] => 121221
          //   [eye_color] => caucasica
          //   [ethnicity] => Caucásica
          //   [description] => Prueba
          //   [bust] => 90
          //   [waist] => 60
          //   [hip] => 90
 @endphp

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
      <div class="card ml-2 mb-2" style="width:25%;">
        <img class="card-img" 
         style="width:100%"
         src="{{ asset($data->file) }}"
         alt="Card image">                  
      </div>
    @endforeach
    </div>

</div>


@endsection