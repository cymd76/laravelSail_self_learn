<?php
declare(strict_types=1);
namespace App\Listener;

use Illuminate\Auth\Events\Registered;
//use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Mail\Mailer;
use App\Models\User;

class RegisteredListener
{
    private $mailer;
    private $eloquent;
    /**
     * Create the event listener.
     *
     * RegisteredListener constructor.
     * @param Mailer $mailer
     * @param User $eloquent
     */
    public function __construct(Mailer $mailer, User $eloquent)
    {
        $this->mailer = $mailer;
        $this->eloquent= $eloquent;
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $user = $this->eloquent->findOrFail($event->user->getAuthIdentifier());
        $this->mailer->raw('ユーザ登録完了', function($message) use ($user){
            $message->subject('登録完了通知')->to($user->email);
        });
    }
}
