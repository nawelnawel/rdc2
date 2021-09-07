<div class="row p-5 pt-7">
 <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un Materiel</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent='addMateriel()'>

                <div class="card-body">
                  <div class="form-group">
                  
                   <label for="exampleInputRounded0" >Numero De Serie </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newMateriel.num_serie' @error('newMateriel.num_serie') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newMateriel.num_serie') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>
              
                   <label for="exampleInputRounded0" >Code A Barre</label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newMateriel.codebarre' @error('newMateriel.codebarre') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newMateriel.codebarre') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>   
                        
                   <label for="exampleInputRounded0" >Designation </label>
                   <input class="form-control rounded-0" type="text" placeholder="tapez ici" wire:model='newMateriel.nom' @error('newMateriel.nom') is-invalid @enderror id="exampleInputRounded0" >
                   @error('newMateriel.nom') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror

<br>


                    <label for="exampleSelectRounded0">Lot</label>
                        <select  class="custom-select rounded-0"  id="exampleSelectRounded0" wire:model='newMateriel.lot_id'>
                              <option>select one </option>
                               @foreach ($lots as $lot)
                    <option value="{{$lot->id}}">{{$lot->num_lot}}</option>  
                    @endforeach
                  </select>

<br>
<br>
                 <label for="exampleInputRounded0" >Caracteristiques </label>
                 <textarea class="form-control" rows="2" placeholder="Enter ..." wire:model='newMateriel.caracteristiques' @error('newMateriel.caracteristiques') is-invalid @enderror id="exampleInputRounded0"></textarea>
                   
                   @error('newMateriel.caracteristiques') 
                   <span class="text-danger">{{$message}}</span>
                   @enderror



<br>
                 
                      <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio3" disabled=""  wire:model='newMateriel.etat'>
                          <label for="customRadio3" class="custom-control-label">ETAT NEUF (par defaut)</label>
                        </div>



<div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio3" disabled=""  wire:model='newMateriel.affectation'>
                          <label for="customRadio3" class="custom-control-label">  NON AFFECTE (par defaut)</label>
                        </div>
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
          title:"Materiel cree avec succes !",
          showConfirmButton:false,
          timer:3500
      })
  })
  
  </script>
  