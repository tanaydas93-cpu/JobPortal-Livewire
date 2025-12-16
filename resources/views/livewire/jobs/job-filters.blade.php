@once
@push('styles')
    <style>
       

        .filters {
            width: 260px;
            background: #fff;
            border-radius: 6px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .filter-title {
            font-size: 15px;
            font-weight: 600;
            color: #4b5aa6;
        }

        .filter-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #333;
        }

        .filter-item input {
            width: 14px;
            height: 14px;
        }

        .divider {
            height: 1px;
            background: #e6e8f0;
            margin: 6px 0;
        }
    </style>
 @endpush
@endonce



<div class="filters">
    <div class="filter-group">
        <div class="filter-title">Job Type</div>
        <label class="filter-item"><input type="checkbox" wire:model.live='jobTypes' value="Apprenticeship / Internship"> Apprenticeship / Internship (19)</label>
        <label class="filter-item"><input type="checkbox" wire:model.live='jobTypes'value="Contract"> Contract (1)</label>
        <label class="filter-item"><input type="checkbox" wire:model.live='jobTypes'value="Freelance On-Field"> Freelance On-Field (18)</label>
        <label class="filter-item"><input type="checkbox" wire:model.live='jobTypes'value="Full time"> Full time (2)</label>
        <label class="filter-item"><input type="checkbox" wire:model.live='jobTypes'value="Permanent"> Permanent (5)</label>
    </div>

    <div class="divider"></div>

    <div class="filter-group">
        <div class="filter-title">Country</div>
        <label class="filter-item"><input type="checkbox"> India (45)</label>
    </div>

    <div class="divider"></div>

    <div class="filter-group">
        <div class="filter-title">Work Experience</div>
        <label class="filter-item"><input type="checkbox" wire:model.live='experience' value="Experienced"> Experienced (4)</label>
        <label class="filter-item"><input type="checkbox" wire:model.live='experience' value="Fresher">> Fresher (21)</label>
        <label class="filter-item"><input type="checkbox" wire:model.live='experience'value="Open for Both">> Open for Both (20)</label>
    </div>

    <div class="divider"></div>

    <div class="filter-group">
        <div class="filter-title">Salary</div>
        <label class="filter-item"><input type="checkbox" wire:model.live='salary'value=" 200000">> 0 - 200000 (25)</label>
        <label class="filter-item"><input type="checkbox" wire:model.live='salary'value="15000">> 15000(1)</label>
        <label class="filter-item"><input type="checkbox"wire:model.live='salary'value="16000">> 16,000 in hand (1)</label>
      
    </div>
</div>



