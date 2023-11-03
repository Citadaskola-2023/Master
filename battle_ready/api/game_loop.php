<?php

require_once('../app/GameState.php');
require_once('../app/ActionHandler.php');
require_once('../app/Actions.php');

session_start();

const NAME = 'Roberts';

$_SESSION['game_state'] ??= new GameState(NAME . time(), 100);

/** @var GameState $gameState */
$gameState = $_SESSION['game_state'];

$actionHandler = new ActionHandler($gameState);

$action = $_GET['action'] ?? 'default';

header('Content-Type: application/json');
echo json_encode([
    'message' => $actionHandler->handleAction($action),
    'health' => $gameState->getHealth(),
    'meta' => [
        'actions' => $actionHandler->printActions(),
    ]
]);