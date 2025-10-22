<?php $__env->startSection('content'); ?>
<div class="container py-4">
    <h1 class="mb-3">TravelBuddy – Flight Search</h1>

    <form method="GET" action="<?php echo e(url('/flights/status')); ?>">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label class="form-label">Origin (IATA)</label>
            <input type="text" name="origin" class="form-control" required maxlength="3" placeholder="SYD">
        </div>

        <div class="mb-3">
            <label class="form-label">Destination (IATA)</label>
            <input type="text" name="destination" class="form-control" required maxlength="3" placeholder="MEL">
        </div>

        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Passengers</label>
            <input type="number" name="pax" class="form-control" min="1" max="9" value="1">
        </div>

        <div class="mb-3">
            <label class="form-label">Cabin</label>
            <select name="cabin" class="form-control">
                <option value="ECONOMY">Economy</option>
                <option value="BUSINESS">Business</option>
                <option value="FIRST">First</option>
            </select>
        </div>

        <button class="btn btn-primary">Search Flights</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\nickt\OneDrive\Documents\GitHub\travelbuddy\resources\views/travelbuddy/flights/index.blade.php ENDPATH**/ ?>