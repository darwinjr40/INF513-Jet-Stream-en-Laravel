<div>
  <x-header-multi>
      <h6 class="font-medium leading-tight text-base">Editar Persona</h6>
  </x-header-multi>

  <div class="modal-body relative p-4 ">

      <div class="grid grid-cols-2 gap-4">

          <div class="form-group mb-6">
              <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">CI</label>
              <input type="text" wire:model.defer="personas.per_cod" name='cod'
                  class="form-control block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="ingrese CI ">
              <x-jet-input-error for="personas.per_cod" />
          </div>

          <div class="form-group mb-6">
              <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">Nombre</label>
              <input type="text" wire:model.defer="personas.per_nom" name='nombre'
                  class="form-control block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="ingrese Nombre ">
              <x-jet-input-error for="personas.per_nom" />
          </div>

      </div>

      <div class="grid grid-cols-2 gap-4">

          <div class="form-group mb-6">
              <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">Apellidos</label>
              <input type="text" wire:model.defer="personas.per_appm" name='cod'
                  class="form-control block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="ingrese Apellidos ">
              <x-jet-input-error for="personas.per_appm" />
          </div>

          <div class="form-group mb-6">
              <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">profesion</label>
              <input type="text" wire:model.defer="personas.per_prof" name='nombre'
                  class="form-control block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="ingrese profesion ">
              <x-jet-input-error for="personas.per_prof" />
          </div>

      </div>

      <div class="grid grid-cols-2 gap-4">

          <div class="form-group mb-6">
              <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">telefono</label>
              <input type="text" wire:model.defer="personas.per_telf" name='cod'
                  class="form-control block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="ingrese telefono ">
              <x-jet-input-error for="personas.per_telf" />
          </div>

          <div class="form-group mb-6">
              <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">celular</label>
              <input type="text" wire:model.defer="personas.per_cel" name='nombre'
                  class="form-control block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="ingrese celular ">
              <x-jet-input-error for="personas.per_cel" />
          </div>

      </div>

      <div class="grid grid-cols-2 gap-4">

          <div class="form-group mb-6">
              <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">email</label>
              <input type="email" wire:model.defer="personas.per_email" name='cod'
                  class="form-control block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="ingrese email ">
              <x-jet-input-error for="personas.per_email" />
          </div>

          <div class="form-group mb-6">
              <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">direccion</label>
              <input type="text" wire:model.defer="personas.per_dir" name='nombre'
                  class="form-control block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="ingrese direccion ">
              <x-jet-input-error for="personas.per_dir" />
          </div>

      </div>

      <div class="grid grid-cols-2 gap-4">

          <div class="form-group mb-6">
              <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">Fecha Nac</label>
              <input type="date" wire:model.defer="personas.per_fnac" name='cod'
                  class="form-control block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="ingrese Fecha Nac ">
              <x-jet-input-error for="personas.per_fnac" />
          </div>

          <div class="form-group mb-6">
              <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">Lugar Nac</label>
              <input type="text" wire:model.defer="personas.per_lnac" name='nombre'
                  class="form-control block  w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300  rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                  placeholder="ingrese Lugar Nac ">
              <x-jet-input-error for="personas.per_lnac" />
          </div>

      </div>



      <div
      class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-start p-4 border-t border-gray-200 rounded-b-md">
      <a type="button" href="{{ route('persona.index') }}"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out">Cerrar</a>
      
      <button type="button" wire:click="guardar()" wire:loading.attr="disabled"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
          Actualizar</button>    
      </div>

  </div>
</div>
