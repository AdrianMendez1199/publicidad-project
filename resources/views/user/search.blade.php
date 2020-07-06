<div class="quicksearch">
  <h4>Busqueda Rapida:</h4>
  <form action="https://escortwp.com/demo/search-for-escorts/" method="post" class="form-styling"> 
    <input type="hidden" name="action" value="search">
    @csrf 
    <div class="form-input col100"> <select name="country" id="country"
        class="search-country col100 select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
        <option value="-1">País</option>
        @isset($countries)
          @foreach ($countries as $country)
           <option class="level-0" value={{ $country->id }}>{{ $country->country }}</option>
          @endforeach
        @endisset
    </select>
        </div>
    <div class="formseparator"></div>
    <div class="search-cities-input form-input col100"></div>

    <div class="form-input col100"> 
      <select name="gender" class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
        <option value="1">Genero</option>
        <option value="2">Male</option>
        <option value="3">Couple</option>
        <option value="4">Gay</option>
        <option value="5">Transsexual</option>
      </select>
    </div>

    <div class="formseparator"></div>
 
    <div class="formseparator"></div>
    <div class="center"> <input type="submit" name="submit" value="Buscar" class="submit-button blueishbutton rad3">
      <div class="clear5"></div> <a href="https://escortwp.com/demo/search-for-escorts/" class="adv"><span
          class="icon icon-search"></span>Busqueda Avanzada</a>
    </div>
  </form>
  <div class="clear"></div>
</div>
<div class="clear"></div>