<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\AppointmentRequest;

class DeleteCancelledAppointmentRequests extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-cancelled-appointment-requests';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $thresholdDate = now()->subDays(3);

        // Query appointments with the "cancelled" status older than 3 days
        $appointmentsToDelete = AppointmentRequest::where('request_status', 'rejected')
            ->where('created_at', '<', $thresholdDate)
            ->get();
    
        foreach ($appointmentsToDelete as $appointment) {
            $appointment->delete();
        }
    
        $this->info('Cancelled appointments older than 3 days have been deleted.');
    }
}
