
<form wire:submit.prevent="submit">
    <input type="text" wire:model="name" placeholder="Name">
    <input type="email" wire:model="email" placeholder="Email">
    <input type="file" wire:model="logo">
    <input type="text" wire:model="website" placeholder="Website">
    <button type="submit">Speichern</button>
</form>
