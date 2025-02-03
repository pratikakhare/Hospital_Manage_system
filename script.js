document.addEventListener('DOMContentLoaded', function () {
    const feeInput = document.getElementById('fee');
    const facilitySelect = document.getElementById('facility');
    const totalInput = document.getElementById('total');

    function calculateTotal() {
        const fee = parseFloat(feeInput.value);
        const facilityCost = parseFloat(facilitySelect.value);
        const total = fee + facilityCost;
        totalInput.value = total.toFixed(2);
    }

    facilitySelect.addEventListener('change', calculateTotal);

    // Initialize total amount
    calculateTotal();
});
