<form wire:submit.prevent='update({{ $employeeId }})' class="space-y-4" action="">
    <div class="grid grid-cols-2 gap-2">

        <div class="form-control">

            <label class="label">
                <span class="label-text">NIP</span>
            </label>

            <input wire:model="nip" type="text" placeholder="Nama" class="input @error('name') input-error @enderror input-bordered" disabled>

            @error('name')
            <label class="label">
                <span class="label-text-alt">{{ $message }}</span>
            </label>
            @enderror
        </div>

        <div class="form-control">

            <label class="label">
                <span class="label-text">Nama</span>
            </label>

            <input wire:model="nama" type="text" placeholder="Nama" class="input @error('nama') input-error @enderror input-bordered">

            @error('nama')
            <label class="label">
                <span class="label-text-alt">{{ $message }}</span>
            </label>
            @enderror
        </div>

        <div class="form-control">

            <label class="label">
                <span class="label-text">Address</span>
            </label>

            <input wire:model="address" type="text" placeholder="Alamat" class="input @error('address') input-error @enderror input-bordered">

            @error('address')
            <label class="label">
                <span class="label-text-alt">{{ $message }}</span>
            </label>
            @enderror
        </div>

        <div class="form-control">

            <label class="label">
                <span class="label-text">Phone</span>
            </label>

            <input wire:model="phone" type="text" placeholder="phone" class="input @error('phone') input-error @enderror input-bordered">

            @error('phone')
            <label class="label">
                <span class="label-text-alt">{{ $message }}</span>
            </label>
            @enderror
        </div>
        <div class="form-control">

            <label class="label">
                <span class="label-text">Phone</span>
            </label>

            <input wire:model="phone" type="text" placeholder="phone" class="input @error('phone') input-error @enderror input-bordered">

            @error('phone')
            <label class="label">
                <span class="label-text-alt">{{ $message }}</span>
            </label>
            @enderror
        </div>
        <div class="form-control">

            <label class="label">
                <span class="label-text">Phone</span>
            </label>

            <input wire:model="phone" type="text" placeholder="phone" class="input @error('phone') input-error @enderror input-bordered">

            @error('phone')
            <label class="label">
                <span class="label-text-alt">{{ $message }}</span>
            </label>
            @enderror
        </div>

    </div>

    <button class="btn btn-warning">Update</button>
    <button type="button" wire:click="$emit('closeForm')" class="btn">Cancel</button>
</form>