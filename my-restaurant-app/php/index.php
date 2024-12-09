<?php
header('Content-Type: application/json');
include 'db.php'; 


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM dishes";
    $result = $conn->query($sql);
    $dishes = [];
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $dishes[] = $row;
        }
    }
    echo json_encode($dishes);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data['name'];
    $description = $data['description'];
    $price = $data['price'];

    $stmt = $conn->prepare("INSERT INTO dishes (name, description,price) VALUES (?, ?, ?)");
    $stmt->bind_param("ss", $name, $description,$price);
    
    if ($stmt->execute()) {
        echo json_encode(['id' => $stmt->insert_id, 'name' => $name, 'description' => $description]);
    } else {
        echo json_encode(['error' => 'Ошибка при добавлении блюда']);
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    parse_str(file_get_contents("php://input"), $_DELETE);
    $id = $_DELETE['id'];

    $stmt = $conn->prepare("DELETE FROM dishes WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['error' => 'Ошибка при удалении блюда']);
    }
}

$conn->close();
?>