<?php

namespace App\Http\Livewire\Pegawai;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Employee;

class Index extends Component
{
    use WithPagination;

    public $nip, $nama, $address, $phone, $employeeId;
    public $paginate = 10, $search, $formVisible = false;

    protected $listeners = ['employeeAdded', 'closeForm', 'employeeEdited'];

    public function render()
    {
        return view('livewire.pegawai.index', [
            'employees' => $this->search
                ? Employee::where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate)
                : Employee::paginate($this->paginate)
        ]);
    }
    public function create()
    {
        $this->formVisible = 'create';
    }

    public function closeForm()
    {
        $this->resetCreateForm();
        $this->formVisible = false;
    }

    public function store()
    {
        $this->validate([
            'nip' => 'required|numeric|unique:employees,nip',
            'name' => 'required|string|max:100',
            'address' => 'required|string',
            'phone' => 'required|numeric|digits_between:10,13|unique:employees,phone',
        ]);

        Employee::create([
            'nip' => $this->nip,
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone,
        ]);

        $this->emit('employeeAdded');
    }

    public function edit(Employee $employee)
    {
        $this->formVisible = 'edit';

        $this->emit('employeeEdit', $employee);
    }

    public function studentEdit($employee)
    {
        // Isi properti yang sudah dideklarasikan sebelumnya menggunakan data dari emit
        $this->employeeId = $employee['nip'];
        $this->nip = $employee['nip'];
        $this->nama = $employee['nama'];
        $this->address = $employee['address'];
        $this->phone = $employee['phone'];
    }


    public function update(Employee $employee)
    {    // Validasi
        $this->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:10,13|unique:employees,phone,' . $this->employeeId . ',nip',
        ]);

        // Update ke database
        $employee->update([
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone,
        ]);

        // Emit untuk trigger notifikasi
        $this->emit('employeeEdited');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        // Untuk memberi notifikasi
        session()->flash('message', 'Employee deleted successfully');
    }

    public function employeeAdded()
    {
        session()->flash('message', 'Employee added successfully');
        // Tutup form
        $this->closeForm();
    }

    public function employeeEdited()
    {
        session()->flash('message', 'Employee edited successfully');
        // Tutup form
        $this->closeForm();
    }

    private function resetCreateForm()
    {
        $this->nip = '';
        $this->name = '';
        $this->phone = '';
        $this->address = '';
    }
}
