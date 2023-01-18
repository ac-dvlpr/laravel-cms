<?php

declare(strict_types=1);

namespace Modules\Common\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Modules\Common\Http\Requests\ContactFormRequest;
use Modules\Common\Services\ContactService;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    private $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index(): View
    {
        return view('contact-form');
    }

    public function send(ContactFormRequest $request): RedirectResponse
    {
        $this->contactService->sendContactForm($request->dto());

        return back()->with('success', __('common.alert.contact-form.info'));
    }
}