<?php

namespace Http;

/**
 * @OA\Info(
 *   title="Sigaa backend API",
 *   version="v1",
 * )
 * 
 * @OA\Server(
 *      url="{schema}://{url}",
 *      description="Local environment",
 *      @OA\ServerVariable(
 *          serverVariable="schema",
 *          enum={"http", "https"},
 *          default="http"
 *      ),
 *      @OA\ServerVariable(
 *          serverVariable="url",
 *          enum={"localhost"},
 *          default="localhost"
 *      )
 * )
 * 
 * @OA\SecurityScheme(
 *   securityScheme="bearerToken",
 *   type="apiKey",
 *   in="header",
 *   name="Authorization"
 * )
 */