<?php
    /**
     * Author: Kent Madsen
     * Version: 1.0.0
     * Copyright: 2022, Kent vejrup Madsen
     *
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Code of Conduct: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/code_of_conduct.md
     *
     * License: https://github.com/KentVejrupMadsen/EASV.Exam.Kanban.Backend/blob/main/license.md
     */
    namespace Tests\Feature;

    // use Illuminate\Foundation\Testing\RefreshDatabase;
    use Tests\TestCase;


    class ExampleTest
        extends TestCase
    {
        public function test_the_application_returns_a_successful_response()
        {
            $response = $this->get('/');

            $response->assertStatus(200);
        }
    }
?>
