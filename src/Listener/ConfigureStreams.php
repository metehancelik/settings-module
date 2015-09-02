<?php namespace Anomaly\SettingsModule\Listener;

use Anomaly\SettingsModule\Listener\Command\SetAccess;
use Anomaly\SettingsModule\Listener\Command\SetDatetime;
use Anomaly\SettingsModule\Listener\Command\SetDistribution;
use Anomaly\SettingsModule\Listener\Command\SetEmail;
use Anomaly\SettingsModule\Listener\Command\SetLocales;
use Anomaly\SettingsModule\Listener\Command\SetThemes;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class ConfigureStreams
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\SettingsModule\Listener
 */
class ConfigureStreams
{

    use DispatchesJobs;

    /**
     * Handle the event.
     */
    public function handle()
    {
        $this->dispatch(new SetEmail());
        $this->dispatch(new SetThemes());
        $this->dispatch(new SetAccess());
        $this->dispatch(new SetLocales());
        $this->dispatch(new SetDatetime());
    }
}
