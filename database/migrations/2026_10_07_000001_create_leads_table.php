<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('company_name')->nullable();
            $table->string('city')->nullable();
            $table->string('product_campaign')->default('ITrove POS'); // ITrove POS, ITrove School, ITrove Agency, Other
            $table->string('lead_source')->default('WhatsApp Ad'); // WhatsApp Ad, Facebook/Instagram Ad, Google Ad, Website Form, Direct Call, Referral
            $table->string('status')->default('New'); // New, Contacted, Follow-up Scheduled, Demo Scheduled, Proposal Sent, Won, Lost, Junk
            $table->string('priority')->default('Warm'); // Hot, Warm, Cold
            $table->decimal('estimated_value', 12, 2)->default(0.00);
            $table->dateTime('next_followup_date')->nullable();
            $table->dateTime('last_contacted_at')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('assigned_to')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('leads');
    }
};
