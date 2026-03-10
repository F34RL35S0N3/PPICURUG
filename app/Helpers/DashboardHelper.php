<?php

namespace App\Helpers;

class DashboardHelper
{
    /**
     * Get dashboard statistics
     */
    public static function getDashboardStats()
    {
        return [
            'total_calls' => 1234,
            'answered_calls' => 987,
            'abandoned_calls' => 247,
            'busy_calls' => 12,
            'total_duration' => '245h 32m',
            'avg_duration' => '12m 45s',
            'success_rate' => 80,
            'avg_waiting_time' => '2m 15s'
        ];
    }

    /**
     * Get call volume data
     */
    public static function getCallVolumeData()
    {
        return [
            'inbound' => [44, 55, 41, 37, 22, 43, 21, 49, 56, 45, 38, 42],
            'outbound' => [53, 32, 33, 52, 13, 43, 32, 12, 23, 45, 32, 34]
        ];
    }

    /**
     * Get recent calls
     */
    public static function getRecentCalls()
    {
        return [
            [
                'caller' => 'John Doe',
                'agent' => 'Jane Smith',
                'duration' => '5m 23s',
                'status' => 'Answered',
                'status_class' => 'success',
                'type' => 'Inbound',
                'time' => '10:45 AM'
            ],
            [
                'caller' => 'Peter Jones',
                'agent' => '-',
                'duration' => '0m 12s',
                'status' => 'Abandoned',
                'status_class' => 'warning',
                'type' => 'Inbound',
                'time' => '10:32 AM'
            ],
            [
                'caller' => 'Mary Johnson',
                'agent' => 'Mike Brown',
                'duration' => '12m 5s',
                'status' => 'Answered',
                'status_class' => 'success',
                'type' => 'Inbound',
                'time' => '9:15 AM'
            ]
        ];
    }

    /**
     * Format duration to human readable format
     */
    public static function formatDuration($seconds)
    {
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $secs = $seconds % 60;

        if ($hours > 0) {
            return sprintf('%dh %dm %ds', $hours, $minutes, $secs);
        } elseif ($minutes > 0) {
            return sprintf('%dm %ds', $minutes, $secs);
        } else {
            return sprintf('%ds', $secs);
        }
    }

    /**
     * Get status badge class
     */
    public static function getStatusBadgeClass($status)
    {
        $classes = [
            'Answered' => 'bg-label-success',
            'Abandoned' => 'bg-label-warning',
            'Busy' => 'bg-label-danger',
            'Missed' => 'bg-label-danger',
            'Pending' => 'bg-label-info'
        ];

        return $classes[$status] ?? 'bg-label-secondary';
    }

    /**
     * Get call type icon class
     */
    public static function getCallTypeIcon($type)
    {
        $icons = [
            'Inbound' => 'bx bx-phone-incoming',
            'Outbound' => 'bx bx-phone-outgoing',
            'Internal' => 'bx bx-phone'
        ];

        return $icons[$type] ?? 'bx bx-phone';
    }
}
