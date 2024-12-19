<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\News;
use App\Models\Consultant;

class ViewController extends Controller
{

    public function index()
    {
        $services = [
            [
                'image' => 'assets/frontend-image/service-image/accounting.png',
                'title' => 'Accounting Service',
                'description' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'image' => 'assets/frontend-image/service-image/advisory.png',
                'title' => 'Auditing & Assurance',
                'description' => 'Audit and assurance is the process of verifying the records available in a company\'s accounting records according to accounting standards and principles, It also confirms whether the accounting records are accurate.',
            ],
            [
                'image' => 'assets/frontend-image/service-image/auditing.png',
                'title' => 'Tax Service',
                'description' => 'Service tax is a tax collected by the government. In Indonesia it is generally 10% of your total bill. The bill includes food, drinks and other services such as ambiance.',
            ],
            [
                'image' => 'assets/frontend-image/service-image/business.png',
                'title' => 'Business Advisory',
                'description' => 'a business advisor is a wise strategist who works for the entrepreneur\'s company and helps him in various departments - business planning, marketing, finance and even business development.',
            ],
            [
                'image' => 'assets/frontend-image/service-image/tax.png',
                'title' => 'Business Training',
                'description' => 'Business training is a process of exploring the abilities/potential of individuals by asking questions to get the goals to be achieved.',
            ],
        ];

        $faqs = [
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
        ];

        $banners = Banner::orderBy('created_at', 'desc')->take(3)->get();

        $news = News::with(['services'])
            ->where('status', '1')
            ->where('berita_hangat', '1')
            ->limit(3)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('frontend.home', compact('services', 'news', 'faqs', 'banners'));
    }

    public function vision()
    {
        return view('frontend.aboutUs.vision');
    }

    public function consultant()
    {
        // $consultants = [
        //     [
        //         'image' => 'assets/frontend-image/consultant-image/edwin.jpg',
        //         'name' => 'Edwin Frymaruwah, S.E., M.Ak',
        //         'job' => 'Consultant Bussiness',
        //     ],
        //     [
        //         'image' => 'assets/frontend-image/consultant-image/edwin.jpg',
        //         'name' => 'Edwin Frymaruwah',
        //         'job' => 'Consultant Bussiness',
        //     ],
        //     [
        //         'image' => 'assets/frontend-image/consultant-image/edwin.jpg',
        //         'name' => 'Edwin Frymaruwah, S.E., M.Akdadada',
        //         'job' => 'Consultant Bussiness',
        //     ],
        //     [
        //         'image' => 'assets/frontend-image/consultant-image/edwin.jpg',
        //         'name' => 'Edwin Frymaruwah, S.E., M.Ak',
        //         'job' => 'Consultant Bussiness',
        //     ],
        //     [
        //         'image' => 'assets/frontend-image/consultant-image/edwin.jpg',
        //         'name' => 'Edwin Frymaruwah, S.E., M.Ak',
        //         'job' => 'Consultant Bussiness',
        //     ],
        //     [
        //         'image' => 'assets/frontend-image/consultant-image/edwin.jpg',
        //         'name' => 'Edwin Frymaruwah, S.E., M.Ak',
        //         'job' => 'Consultant Bussiness',
        //     ],
        //     [
        //         'image' => 'assets/frontend-image/consultant-image/edwin.jpg',
        //         'name' => 'Edwin Frymaruwah, S.E., M.Ak',
        //         'job' => 'Consultant Bussiness',
        //     ],
        //     [
        //         'image' => 'assets/frontend-image/consultant-image/edwin.jpg',
        //         'name' => 'Edwin Frymaruwah, S.E., M.Ak',
        //         'job' => 'Consultant Bussiness',
        //     ],
        //     [
        //         'image' => 'assets/frontend-image/consultant-image/edwin.jpg',
        //         'name' => 'Edwin Frymaruwah, S.E., M.Ak',
        //         'job' => 'Consultant Bussiness',
        //     ],
        //     [
        //         'image' => 'assets/frontend-image/consultant-image/edwin.jpg',
        //         'name' => 'Edwin Frymaruwah, S.E., M.Ak',
        //         'job' => 'Consultant Bussiness',
        //     ],
        // ];

        $consultants = Consultant::all();

        return view('frontend.aboutUs.consultant', compact('consultants'));
    }

    public function seminar()
    {
        $previous = [
            [
                'image' => 'assets/frontend-image/seminar-image/poster.png',
                'title' => 'Pelatihan Menguak Tips dan Trik Penyesuaian SPT Badan dan Rekonsiliasi Fiskal',
            ],
            [
                'image' => 'assets/frontend-image/seminar-image/poster.png',
                'title' => 'Accounting services are a process for',
            ],
            [
                'image' => 'assets/frontend-image/seminar-image/poster.png',
                'title' => 'Accounting services are a process for',
            ],
            [
                'image' => 'assets/frontend-image/seminar-image/poster.png',
                'title' => 'Accounting services are a process for',
            ],
            [
                'image' => 'assets/frontend-image/seminar-image/poster.png',
                'title' => 'Accounting services are a process for',
            ],
            [
                'image' => 'assets/frontend-image/seminar-image/poster.png',
                'title' => 'Accounting services are a process for',
            ],
            [
                'image' => 'assets/frontend-image/seminar-image/poster.png',
                'title' => 'Accounting services are a process for',
            ],
            [
                'image' => 'assets/frontend-image/seminar-image/poster.png',
                'title' => 'Accounting services are a process for',
            ],
        ];

        return view('frontend.service.seminar', compact('previous'));
    }

    public function accountingService()
    {
        return view('frontend.service.accounting');
    }

    public function auditingService()
    {
        return view('frontend.service.auditing');
    }
    public function advisoryService()
    {
        return view('frontend.service.advisory');
    }
    public function businessService()
    {
        return view('frontend.service.business');
    }
    public function taxService()
    {
        return view('frontend.service.tax');
    }
    public function jobVacancyCareer()
    {
        return view('frontend.career.job-vacancy');
    }
    public function programCareer()
    {
        $faqs = [
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
            [
                'question' => 'Click to open this one and close others',
                'answer' => 'Accounting services are a process for preparing and preparing financial reports that begin with data collection/proof of transactions/invoices/recap records which are processed into financial reports.',
            ],
        ];

        return view('frontend.career.program-activity', compact('faqs'));
    }
    public function article()
    {
        return view('frontend.article');
    }
}