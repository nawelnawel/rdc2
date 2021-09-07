<div class="row p-5 pt-7">
 <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un Materiel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent='updateMateriel()'>

                <div class="card-body">
                  <div class="form-group">
                  
                   <label for="exampleInputRounded0" >Numero De Serie </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='editMateriel.num_serie' @error('editMateriel.num_serie') is-invalid @enderror id="exampleInputRounded0" >
                   @error('editMateriel.num_serie') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>
              
                   <label for="exampleInputRounded0" >Code A Barre</label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='editMateriel.codebarre' @error('editMateriel.codebarre') is-invalid @enderror id="exampleInputRounded0" >
                   @error('editMateriel.codebarre') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>   
                        
                   <label for="exampleInputRounded0" >Designation </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='editMateriel.nom' @error('editMateriel.nom') is-invalid @enderror id="exampleInputRounded0" >
                   @error('editMateriel.nom') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>


                    <label for="exampleSelectRounded0">Lot</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editMateriel.lot_id'>
                               @foreach ($lots as $lot)
                    <option value="{{$lot->id}}">{{$lot->num_lot}}</option>  
                    @endforeach
                  </select>
<br>
                 <label for="exampleInputRounded0" >Caracteristiques </label>
                 <textarea class="form-control" rows="2" placeholder="Enter ..." wire:model='editMateriel.caracteristiques' @error('editMateriel.caracteristiques') is-invalid @enderror id="exampleInputRounded0"></textarea>
                   
                   @error('editMateriel.caracteristiques') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror
<br>
<br>                  
                      <label for="exampleSelectRounded0">Etat</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='editMateriel.etat'>
                              
                    <option value="neuf">NEUF</option>  
                    <option value="en panne">EN PANNE</option>  
                    <option value="en cours" >EN COURS DE REPARATION</option>  
                  </select>

<br>
<br>                   
<br>

                       <div  class="float-right">
                         <button type="submit" class="btn btn-primary btn-sm">AJOUTER</button>
                         <button type="button" class="btn btn-warning btn-sm"  wire:click.prevent='goToListMateriel()'>Annuler</button>
                       </div> 
                <!-- /.card-body -->

              
              </form>
            </div>
            <!-- /.card -->

           
           

          </div>



</div>

 <script>
  window.addEventListener("showSuccessMessage",event=>{
      Swal.fire({
          position:'top-end',
          icon:'success',
          toast:true,
          title:"materiel mis a jour  avec succes !",
          showConfirmButton:false,
          timer:3500
      })
  })
  
  </script>
  