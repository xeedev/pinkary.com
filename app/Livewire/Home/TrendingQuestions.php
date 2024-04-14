<?php

declare(strict_types=1);

namespace App\Livewire\Home;

use App\Queries\Feeds\TrendingQuestionsFeed;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Livewire\Component;

final class TrendingQuestions extends Component
{
    /**
     * Renders the component.
     */
    public function render(Request $request): View
    {
        $feed = new TrendingQuestionsFeed();

        return view('livewire.home.trending-questions', [
            'trendingQuestions' => $feed->builder()->get(),
        ]);
    }
}
