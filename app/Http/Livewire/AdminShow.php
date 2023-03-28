<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\admin;
use Illuminate\Database\Eloquent\Model;

class StudentShow extends Model
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $id, $name, $tell, $photo;
    public $search = '';

    protected function rules()
    {
        return [
            'name' => 'required|string|min:6',
            'tell' => ['required','email'],
            'photo' => 'required|string',
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function saveStudent()
    {
        $validatedData = $this->validate();

        admin::create($validatedData);
        session()->flash('message','Student Added Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function editadmin(int $id)
    {
        $admin = admin::find($id);
        if($admin){

            $this->id = $admin->id;
            $this->name = $admin->name;
            $this->tell = $admin->tell;
            $this->photo = $admin->photo;
        }else{
            return redirect()->to('/admin');
        }
    }

    public function updateS()
    {
        $validatedData = $this->validate();

        Student::where('id',$this->student_id)->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'course' => $validatedData['course']
        ]);
        session()->flash('message','Student Updated Successfully');
        $this->resetInput();
        $this->dispatchBrowserEvent('close-modal');
    }

    public function deleteStudent(int $student_id)
    {
        $this->student_id = $student_id;
    }

    public function destroyStudent()
    {
        Student::find($this->student_id)->delete();
        session()->flash('message','Student Deleted Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->course = '';
    }

    public function render()
    {
        $students = Student::where('name', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(3);
        return view('livewire.student-show', ['students' => $students]);
    }
}