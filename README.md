# Laravel Rest Api
Basic API to interact with SPA applications. It allows to view skills,  add skills, edit skill and delete skills

## Routes
'''
  GET|HEAD        / ............................................................................................ 
  POST            _ignition/execute-solution ignition.executeSolution › Spatie\LaravelIgnition › ExecuteSolutio…
  GET|HEAD        _ignition/health-check . ignition.healthCheck › Spatie\LaravelIgnition › HealthCheckController
  POST            _ignition/update-config ignition.updateConfig › Spatie\LaravelIgnition › UpdateConfigControll…
  GET|HEAD        api/v1/skills .................................... skills.index › Api\V1\SkillController@index
  POST            api/v1/skills .................................... skills.store › Api\V1\SkillController@store
  GET|HEAD        api/v1/skills/{skill} .............................. skills.show › Api\V1\SkillController@show
  PUT|PATCH       api/v1/skills/{skill} .......................... skills.update › Api\V1\SkillController@update
  DELETE          api/v1/skills/{skill} ........................ skills.destroy › Api\V1\SkillController@destroy
  GET|HEAD        sanctum/csrf-cookie ........ sanctum.csrf-cookie › Laravel\Sanctum › CsrfCookieController@show
'''
