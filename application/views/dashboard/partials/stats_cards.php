<!-- Total Tests Card -->
<div class="col-md-3 col-sm-6">
    <div class="card data-card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="rounded-circle p-3 bg-primary-light">
                    <i class="ri-flask-line text-primary font-size-24"></i>
                </div>
                <div class="ml-3">
                    <h2 class="mb-0 animate-number" data-value="<?php echo $total_tests; ?>">0</h2>
                    <p class="text-muted mb-0">Total Tests</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Active Tests Card -->
<div class="col-md-3 col-sm-6">
    <div class="card data-card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="rounded-circle p-3 bg-success-light">
                    <i class="ri-pulse-line text-success font-size-24"></i>
                </div>
                <div class="ml-3">
                    <h2 class="mb-0 animate-number" data-value="<?php echo $active_tests; ?>">0</h2>
                    <p class="text-muted mb-0">Active Tests</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Reviews Card -->
<div class="col-md-3 col-sm-6">
    <div class="card data-card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="rounded-circle p-3 bg-warning-light">
                    <i class="ri-time-line text-warning font-size-24"></i>
                </div>
                <div class="ml-3">
                    <h2 class="mb-0 animate-number" data-value="<?php echo $pending_reviews; ?>">0</h2>
                    <p class="text-muted mb-0">Pending Reviews</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Completed Tests Card -->
<div class="col-md-3 col-sm-6">
    <div class="card data-card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="rounded-circle p-3 bg-info-light">
                    <i class="ri-check-double-line text-info font-size-24"></i>
                </div>
                <div class="ml-3">
                    <h2 class="mb-0 animate-number" data-value="<?php echo $completed_tests; ?>">0</h2>
                    <p class="text-muted mb-0">Completed Tests</p>
                </div>
            </div>
        </div>
    </div>
</div>