<?php

use App\Models\Lead;

it('renders the landing page and shows the demo request form', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('Coba Demo Gratis');
    $response->assertSee('Nama Lengkap');
    $response->assertSee('Email / No. WhatsApp');
});

it('stores a demo request and redirects back with success', function () {
    $response = $this->post('/demo-gratis', [
        'name' => 'Nama Test',
        'school_name' => 'Sekolah Test',
        'phone_email' => 'test@example.com',
        'message' => 'Pesan percobaan',
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('leads', [
        'name' => 'Nama Test',
        'school_name' => 'Sekolah Test',
        'phone_email' => 'test@example.com',
        'message' => 'Pesan percobaan',
    ]);
});

it('displays validation errors when demo request submission is invalid', function () {
    $response = $this->from('/')->post('/demo-gratis', [
        'name' => '',
        'school_name' => '',
        'phone_email' => '',
    ]);

    $response->assertRedirect('/');
    $response->assertSessionHasErrors(['name', 'school_name', 'phone_email']);
});
