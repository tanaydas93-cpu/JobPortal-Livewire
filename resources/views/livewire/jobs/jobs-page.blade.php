
<style>
  .jobs-page {
    background: #f6f6fb1c;
    padding: 20px 0;
}

.jobs-grid {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 260px 1fr;
    grid-template-rows: auto 1fr;
    gap: 20px;
}

/* Left sidebar */
.filters {
    grid-row: 1 / span 2;
}

/* Right top */
.search {
    grid-column: 2;
}

/* Right bottom */
.list {
    grid-column: 2;
}

</style>
<div class="jobs-page">
    <div class="jobs-grid">

        <!-- LEFT -->
        <div class="filters">
            <livewire:jobs.job-filters />
        </div>

        <!-- RIGHT TOP -->
        <div class="search">
            <livewire:jobs.job-search />
        </div>

        <!-- RIGHT BOTTOM -->
        <div class="list">
            <livewire:jobs.job-list />
        </div>

    </div>
</div>
