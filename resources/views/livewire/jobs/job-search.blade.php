@once
@push('styles')
<style>


.job-search-bar {
    display: flex;
    gap: 12px;
    max-width: 900px;
    padding: 12px;
    border: 1px solid #e0e0e0;
    background: #fff;
}

.job-search-bar input {
    flex: 1;
    height: 42px;
    padding: 0 12px;
    border: 1px solid #ccc;
    font-size: 14px;
    outline: none;
}

.job-search-bar input:focus {
    border-color: #ff6a00;
}

.job-search-bar button {
    height: 42px;
    padding: 0 24px;
    background: #ff6a00;
    color: #fff;
    border: none;
    font-size: 14px;
    cursor: pointer;
    white-space: nowrap;
}

.job-search-bar button:hover {
    background: #e65f00;
}
</style>
@endpush
@endonce

<div>
    <div  class="job-search-bar">
    <input wire:model="what" type="text" placeholder="What (Job title, keywords)">
    <input wire:model="where" type="text" placeholder="Where (Location)">
    <button type="button" wire:click='search'>Search</button>
</div>

</div>
