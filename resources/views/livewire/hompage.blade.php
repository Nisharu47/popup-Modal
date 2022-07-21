<div>
    <br>
    <h1 style="color: white" align="center">Categories Table</h1>


    {{-- Create model --}}
            <div> 
                <div>
                  <div>
                    <div class="row mt-5">
                        <div class="col-md-6 offset-3">
                     
                               
                <div wire:ignore.self class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal" aria-hidden="true">
              
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" data-toggle="modal" id="createModal">Add Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type category name:</label>
                            <input type="text" class="form-control" name="name" wire:model='categoryName'>  
                          </div>

                          <div class="col-12 col-md-4 col-lg-4">
                            <div class="form-group">Blood Group
                                <select class="form-control" name="School" id="blood">

                                    <option value="blood_groups.blood_type">#</option>

                                </select>
                            </div>
                          </div>
                          {{-- <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div> --}}
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" wire:click='saveData'>Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                        </div>
                            
                 </div>
                </div>
                
            </div>
 {{-- button --}}
 <div class=" text-right">
    <button  class="btn btn-primary" wire:click='showModal'>
            ADD Category
    </button>
</div>
<br>
{{-- search --}}
<div align="right">
    <input type="text" placeholder="Search" wire:model="search_key">
    <button class="btn btn-primary">Searh</button>
    </div>

            {{-- table --}}
<div class="table-responsive mt-5">
    <table class="table table-bordered">
        <thead>
            <tr class="bg-dark text-white">
                <th>Id</th>
                <th>Categories</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
        @php($count = 1)
        @foreach ($data_list as $row)
          <tr class="bg-dark text-white">
            <td>{{$count}}</td>
            <td>{{$row->name}}</td>
            <td>


              <button class="btn btn-success" data-toggle="modal" data-target="#updateModal" wire:click='updateData({{ $row->id }})'>Edit</button>
              <button class="btn btn-danger" wire:click="showDelete({{ $row->id }})">Delete</button>
            </td>
          </tr>
        @php($count++)
        @endforeach
      </tbody>
    
  </table>
</div>
               {{-- Edit model --}}
               <div> 
                <div>
                  <div>
                    <div class="row mt-5">
                        <div class="col-md-6 offset-3">
                     
                               
                <div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
              
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="updateModal">Edit Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Type category name:</label>
                            <input type="text" class="form-control" id="recipient-name" wire:model='categoryName'>
                          </div>
                          {{-- <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div> --}}
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click='clearData'>Close</button>
                        <button type="button" class="btn btn-primary" wire:click='saveData'>Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                        </div>
                            
                    </div>
                    </div>

        {{-- delete modal --}}
<div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModal">Delete Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                Are you sure?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal" >Close</button>
                <button type="button"  class="btn btn-primary close-modal" wire:click='deleteData'>Yes</button>
            </div>
        </div>
    </div>
</div>


