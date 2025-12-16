<style>

    .job-details-wrapper {
    max-width: 750px;
    margin: 0 auto;
    padding: 16px;
}

.job-details-grid {
    display: grid;
    grid-template-columns: 2fr 1fr; /* left wider, right narrower */
    gap: 24px;
}

/* Optional clarity */
.job-left {
    display: block;
}

.job-right {
    display: block;
}

</style>

<div>
    <!-- <livewire:jobs.job-details-hero/> -->
     <div class="job-details-wrapper">
    <div class="job-details-grid">
        <div class="job-left">
            <livewire:jobs.job-details-content :job="$job" />
        </div>

        <div class="job-right">
            <livewire:jobs.job-details-info :job="$job" />
        </div>
    </div>
</div>
 
</div>