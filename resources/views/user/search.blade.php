<div class="form-search-container">
  <form class="buscador">
    <div class="form-search-container-title">
        <h4>Busqueda Rapida: </h4>
      </div>
     @csrf 
     <select>
       <option>País</option>
     </select>
     <select>
       <option value="mujer">Mujer</option>
       <option value="hombre">Hombre</option>
       <option value="transexual">Transexual</option>
       <option value="gay">Gay</option>
     </select>
      <button class="btn btn-info amd-btn" type="submit">Buscar</button>
  </form>
</div>
