<?php
/**
 * Development Debug Page
 * Use this to test PHP configuration and variables
 */

// Include configuration
require_once 'includes/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debug - <?php echo SITE_NAME; ?></title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            padding: 20px; 
            background: #f5f5f5; 
        }
        .debug-section { 
            background: white; 
            padding: 20px; 
            margin: 20px 0; 
            border-radius: 8px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
        }
        .debug-section h2 { 
            color: #2E5F3E; 
            border-bottom: 2px solid #D2B48C; 
            padding-bottom: 10px; 
        }
        .config-item { 
            margin: 10px 0; 
            padding: 10px; 
            background: #f9f9f9; 
            border-left: 4px solid #2E5F3E; 
        }
        .nav-item { 
            padding: 5px 10px; 
            margin: 5px 0; 
            background: #e8f5e8; 
            border-radius: 4px; 
        }
        pre { 
            background: #2c2c2c; 
            color: #f0f0f0; 
            padding: 15px; 
            border-radius: 4px; 
            overflow-x: auto; 
        }
    </style>
</head>
<body>
    <h1>🛠️ GolfDraft Development Debug Page</h1>
    
    <div class="debug-section">
        <h2>📋 Site Configuration</h2>
        <div class="config-item">
            <strong>Site Name:</strong> <?php echo SITE_NAME; ?>
        </div>
        <div class="config-item">
            <strong>Tagline:</strong> <?php echo SITE_TAGLINE; ?>
        </div>
        <div class="config-item">
            <strong>Motto:</strong> <?php echo SITE_MOTTO; ?>
        </div>
        <div class="config-item">
            <strong>Phone:</strong> <?php echo COMPANY_PHONE; ?>
        </div>
        <div class="config-item">
            <strong>Email:</strong> <?php echo COMPANY_EMAIL; ?>
        </div>
        <div class="config-item">
            <strong>Address:</strong> <?php echo COMPANY_ADDRESS; ?>
        </div>
    </div>
    
    <div class="debug-section">
        <h2>🧭 Navigation Items</h2>
        <?php foreach ($navigation_items as $key => $item): ?>
            <div class="nav-item">
                <strong><?php echo ucfirst($key); ?>:</strong> 
                <a href="<?php echo htmlspecialchars($item['url']); ?>">
                    <?php echo htmlspecialchars($item['title']); ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="debug-section">
        <h2>📄 Page Configuration</h2>
        <div class="config-item">
            <strong>Title:</strong> <?php echo htmlspecialchars($page_config['title']); ?>
        </div>
        <div class="config-item">
            <strong>Description:</strong> <?php echo htmlspecialchars($page_config['description']); ?>
        </div>
        <div class="config-item">
            <strong>Keywords:</strong> <?php echo htmlspecialchars($page_config['keywords']); ?>
        </div>
    </div>
    
    <div class="debug-section">
        <h2>🗂️ File Structure</h2>
        <div class="config-item">
            <strong>CSS Path:</strong> <?php echo CSS_PATH; ?>
        </div>
        <div class="config-item">
            <strong>JS Path:</strong> <?php echo JS_PATH; ?>
        </div>
        <div class="config-item">
            <strong>Image Path:</strong> <?php echo IMG_PATH; ?>
        </div>
    </div>
    
    <div class="debug-section">
        <h2>🌐 Server Information</h2>
        <div class="config-item">
            <strong>PHP Version:</strong> <?php echo phpversion(); ?>
        </div>
        <div class="config-item">
            <strong>Server:</strong> <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?>
        </div>
        <div class="config-item">
            <strong>Document Root:</strong> <?php echo $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown'; ?>
        </div>
        <div class="config-item">
            <strong>Current URL:</strong> 
            <?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
        </div>
    </div>
    
    <div class="debug-section">
        <h2>📁 File Existence Check</h2>
        <?php
        $files_to_check = [
            'includes/config.php',
            'includes/header.php',
            'includes/footer.php',
            'css/main.css',
            'css/header.css',
            'css/footer.css',
            'js/header.js',
            'styles.css',
            'script.js',
            'golfimage.jpg'
        ];
        
        foreach ($files_to_check as $file):
            $exists = file_exists($file);
            $status = $exists ? '✅ EXISTS' : '❌ MISSING';
            $class = $exists ? 'nav-item' : 'config-item';
        ?>
            <div class="<?php echo $class; ?>">
                <strong><?php echo $file; ?>:</strong> <?php echo $status; ?>
            </div>
        <?php endforeach; ?>
    </div>
    
    <div class="debug-section">
        <h2>🔧 Actions</h2>
        <p>
            <a href="index.php" style="background: #2E5F3E; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">
                View Main Site
            </a>
            <a href="index.html" style="background: #A0844B; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; margin-left: 10px;">
                View Original HTML
            </a>
        </p>
    </div>
    
    <div class="debug-section">
        <h2>📝 Notes</h2>
        <ul>
            <li>This debug page helps verify that all PHP configuration is working correctly</li>
            <li>Check that all required files exist before deploying</li>
            <li>Ensure XAMPP/Apache is running for PHP functionality</li>
            <li>All constants and variables should display properly above</li>
        </ul>
    </div>
</body>
</html>
