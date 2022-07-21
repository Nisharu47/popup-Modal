<?php

namespace App\Http\Livewire;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class Hompage extends Component
{
    #variables
    public $categoryName;
    public $data_list = [];
    public $category_id = 0;
    public $delete_id = 0;
    public $search_key;


 
   
   #show modal
    public function showModal()
{
    # code...
    $this->dispatchBrowserEvent('showModal');
}

    #save
public function saveData(){

    if ($this->category_id == 0) {
        // return dd($this->categoryName);
        $data = new Category();
        $data->name = $this->categoryName;
        $data->save();
        $this->clearData();   
    } else{
        $data = Category::find($this->category_id);
        $data->name = $this->categoryName;
        $data->save();
        $this->clearData();  
        $this->dispatchBrowserEvent('updateModal');
        $this->dispatchBrowserEvent('hideModal');
    }

 
    
}
        #clear
    public function clearData()
    {
        # code...
        $this->categoryName="";
        $this->category_id= 0;
        $this->dispatchBrowserEvent('hideModal');
    }

        #fetch
    public function fetchData()
    {
        # code...
        if ($this->search_key) {
            #search by key
            $this->data_list = Category::where('name', 'LIKE', '%' . $this->search_key . '%')->get();
        } else {
            #all data
            $this->data_list = Category::all();
        }
    }

    #update
    public function updateData($id)
    {
        # code...
        $data = Category::find($id);
        $this->categoryName = $data->name;
        $this->category_id = $id;
        $data->save();
        
    }

    // show delete modal
    public function showDelete($id)
    {
        # code...
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('ShowdeleteModal');
        $this->dispatchBrowserEvent('hideModal');
       
    }


    #delete
    public function deleteData()
    {
        # code...
       if($this->delete_id != 0){
        $data = Category::find($this->delete_id);
        $data->delete();
    }
    $this->delete_id=0;
    
       
    }


    public function bloodType()
    {
        # code...
        $data= DB::table('blood_groups')
        ->select('blood_groups.id','blood_groups.blood_type');
    }


        #render
    public function render()
    {
        $this->fetchData();
        return view('livewire.hompage')->layout('layouts.navigation');
    }
}

