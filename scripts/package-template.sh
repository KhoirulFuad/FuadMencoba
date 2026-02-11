#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
OUTPUT_NAME="${1:-laravel8-template.zip}"
OUTPUT_PATH="$ROOT_DIR/$OUTPUT_NAME"

cd "$ROOT_DIR"

rm -f "$OUTPUT_PATH"

zip -r "$OUTPUT_PATH" . \
  -x ".git/*" \
  -x "vendor/*" \
  -x "node_modules/*" \
  -x "*.zip"

echo "Archive created: $OUTPUT_PATH"
