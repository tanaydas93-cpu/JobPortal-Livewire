<?php

namespace Database\Factories;

use App\Models\JobList;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobListFactory extends Factory
{
    protected $model = JobList::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement([
                'Delivery Partner',
                'Delivery Executive',
                'Business Development Executive',
                'Sales Executive',
                'Field Associate',
            ]),

            'job_type' => $this->faker->randomElement([
                'Freelance On-Field',
                'Full Time',
                'Contract',
                'Apprenticeship / Internship',
            ]),

            'location' => $this->faker->randomElement([
                'Delhi, Delhi, India',
                'Gurgaon, Haryana, India',
                'Kolkata, West Bengal, India',
                'Mumbai, Maharashtra, India',
                'Bangalore, Karnataka, India',
            ]),
           'job_description' => '
            <h3>Why Join Us?</h3>
<p>
Work on your terms and explore opportunities across multiple industries—from Grocery &amp; Household
to F&amp;B, Logistics, E-commerce, and more. Choose the projects you like, switch between clients
easily, and keep commitments minimal while maximizing earnings.
</p>

<h3>Key Responsibilities</h3>
<ul>
    <li>Pick up and deliver orders for partner businesses (food, grocery, retail, or other goods).</li>
    <li>Ensure safe, timely, and professional deliveries.</li>
    <li>Handle items carefully to maintain quality standards.</li>
    <li>Follow traffic laws and safety regulations.</li>
    <li>Communicate effectively with customers and dispatch teams.</li>
    <li>Maintain simple records of deliveries; collect payments or verify IDs when required.</li>
</ul>

<h3>Requirements</h3>
<ul>
    <li>Aadhaar &amp; PAN card</li>
    <li>Bank account for payouts</li>
    <li>Basic smartphone skills for order updates</li>
    <li>Willingness to work flexible schedules</li>
    <li><em>No personal bike? Assistance available for EV bike rental.</em></li>
</ul>

<h3>What You Get</h3>
<ul>
    <li>Competitive pay range with weekly/monthly payouts</li>
    <li>Reimbursements for bike rental &amp; mobile expenses (where applicable)</li>
    <li>Incentives for meeting or exceeding delivery targets</li>
    <li>Freedom to choose projects and clients across industries</li>
</ul>

<h3>Who This Fits</h3>
<ul>
    <li>Students seeking flexible side income</li>
    <li>Professionals exploring career change or part-time work</li>
    <li>Individuals who enjoy independent, gig-based roles</li>
    <li>Anyone eager to earn extra income and gain multi-industry experience</li>
</ul>
        ',

            'details' => $this->faker->paragraph(3),
            'salary' => $this->faker->randomElement([
            16000,
            200000,
            250000,
            300000,
            400000,
            1500000,
        ]),

            'forwhome' => $this->faker->randomElement([
                'Fresher',
                'Experienced',
                'Open for Both',
            ]),

            'position_filled' => $this->faker->boolean(30),

            'created_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}

