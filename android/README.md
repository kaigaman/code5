# Code5 Android App

Native Android app for Code5 (https://code5.online) — Web Hosting & Domain Registration in Uganda.

## Prerequisites

- Android Studio Hedgehog (2023.1.1) or newer
- JDK 17

## Setup Instructions

### 1. Open in Android Studio

1. Open Android Studio
2. Click "Open an Existing Project"
3. Select the `android` folder
4. Let Gradle sync complete

### 2. Build & Run

- **Debug:** Click Run (green triangle) or use `./gradlew assembleDebug`
- **Release:** `./gradlew assembleRelease` (generates APK in `app/build/outputs/apk/release/`)
- **App Bundle:** `./gradlew bundleRelease` (for Play Store upload)

### 3. Generate Signed App Bundle (Play Store)

1. Open Android Studio → Build → Generate Signed Bundle / APK
2. Select "Android App Bundle"
3. Create a new keystore or use existing, fill in:
   - Keystore path: `android/code5-upload-key.jks`
   - Password: (choose a secure password)
   - Key alias: `code5`
   - Key password: (same or different)
4. Update `android/keystore.properties` with your credentials
5. Run `./gradlew bundleRelease`
6. Upload `app/build/outputs/bundle/release/app-release.aab` to Play Console

### 4. Firebase Setup (Optional — Push Notifications)

If you want push notifications:
1. Go to https://console.firebase.google.com
2. Add an Android app with package name `online.code5.app`
3. Download `google-services.json` and place it in `android/app/`
4. Uncomment the FCM plugin and dependency in `app/build.gradle.kts`
5. Uncomment FCM service in `AndroidManifest.xml`
6. Copy the Server Key to your VPS: `fcm/config.php`

## Project Structure

```
android/
├── app/
│   ├── src/main/
│   │   ├── java/online/code5/app/
│   │   │   ├── MainActivity.kt              # Main activity with bottom nav
│   │   │   ├── SplashActivity.kt            # Splash screen
│   │   │   ├── Code5App.kt                  # Application class
│   │   │   ├── ui/home/                     # Native home screen
│   │   │   ├── ui/services/                 # Native services screens
│   │   │   ├── ui/webview/                  # WebView fragment (base)
│   │   │   ├── ui/domain/                   # Native domain checker
│   │   │   ├── ui/whatsapp/                 # WhatsApp integration
│   │   │   ├── ui/account/                  # Account screen (WebView)
│   │   │   ├── service/                     # FCM service (optional)
│   │   │   ├── network/                     # Retrofit API client
│   │   │   └── util/                        # Helpers
│   │   ├── res/                             # Resources
│   │   └── AndroidManifest.xml
│   └── build.gradle.kts
├── build.gradle.kts
└── settings.gradle.kts
```

## Features

- Native home screen with domain search & service grid
- Native services browser with detail views
- Native domain availability checker with WHOIS
- WhatsApp order integration
- Account management (WebView)
- Pull-to-refresh, share, cache clearing
- Offline detection & retry
- Play Store ready (adaptive icons, ProGuard, signing config)
