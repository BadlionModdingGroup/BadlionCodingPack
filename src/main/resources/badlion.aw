accessWidener   v1  named

#Abstract texture stuff. mostly used in TextureManager
accessible  field   net/minecraft/client/texture/AbstractTexture    glId   I
accessible  field   net/minecraft/client/texture/TextureManager    textures   Ljava/util/Map;

#Text renderer stuff. mostly used in BadlionFontRenderer
accessible  field   net/minecraft/client/font/TextRenderer  field_2825  Z
accessible  field   net/minecraft/client/font/TextRenderer  field_2819  [B
accessible  field   net/minecraft/client/font/TextRenderer  field_2818  [I

#Tag stuff.
accessible  method  net/minecraft/nbt/CompoundTag write (Ljava/lang/String;Lnet/minecraft/nbt/Tag;Ljava/io/DataOutput;)V

#Model loader.
accessible  field   net/minecraft/client/render/model/ModelLoader   field_5367  Lnet/minecraft/class_1063;
accessible  field   net/minecraft/client/render/model/ModelLoader   field_5368  Lnet/minecraft/class_1063;
accessible  field   net/minecraft/client/render/model/ModelLoader   field_5369  Lnet/minecraft/class_1063;
accessible  field   net/minecraft/client/render/model/ModelLoader   field_5370  Lnet/minecraft/class_1063;
accessible  field   net/minecraft/client/render/model/ModelLoader   field_5356  Ljava/util/Map;
accessible  field   net/minecraft/client/render/model/json/ModelVariantMap$class_1072   field_4598  Ljava/lang/String;

#Misc.
accessible  field   net/minecraft/client/options/KeyBinding    pressed    Z
accessible  field   net/minecraft/class_1063    field_4585  Ljava/util/List;
accessible  field   net/minecraft/class_1063    field_4587  Z
accessible  field   net/minecraft/class_1063    field_4587  Z
accessible  class   net/minecraft/class_1063$class_1064
accessible  method  net/minecraft/class_1063    method_3652 (Ljava/lang/String;Lnet/minecraft/class_1063$class_1064;)Ljava/lang/String;
accessible  field   net/minecraft/class_1063   field_4581    Ljava/util/Map;
accessible  field   net/minecraft/class_1063    field_4588  Lnet/minecraft/client/render/model/json/ModelTransformation;
accessible  field   net/minecraft/util/math/Direction   field_5811  [Lnet/minecraft/util/math/Direction;
accessible  field   net/minecraft/client/render/item/ItemRenderer   field_4877  Lnet/minecraft/client/texture/TextureManager;
accessible  field   net/minecraft/client/render/item/ItemRenderer   field_4874  Lnet/minecraft/util/Identifier;
accessible  method  net/minecraft/client/render/item/ItemRenderer   method_3974 (Lnet/minecraft/client/render/model/BakedModel;I)V
accessible  method  net/minecraft/client/render/item/ItemRenderer   method_3976 (Lnet/minecraft/client/render/model/BakedModel;Lnet/minecraft/item/ItemStack;)V
accessible  method  net/minecraft/client/render/item/ItemRenderer   method_3973 (Lnet/minecraft/client/render/model/BakedModel;)V
accessible  method  net/minecraft/client/font/TextRenderer method_2400 (I)V
accessible  field   net/minecraft/entity/Entity field_7385  Lnet/minecraft/util/math/Box;
accessible  field   net/minecraft/client/gui/hud/InGameHud heldItemTooltipFade I
accessible  field   net/minecraft/client/gui/screen/resourcepack/ResourcePackWidget field_3573  Lnet/minecraft/text/Text;
accessible  method  net/minecraft/client/render/entity/model/EntityModel   method_3056   (Ljava/lang/String;II)V
accessible  field   net/minecraft/client/world/ClientWorld  clientChunkCache    Lnet/minecraft/world/chunk/ClientChunkCache;
accessible  field   net/minecraft/world/chunk/ClientChunkCache chunks  Ljava/util/List;
accessible  field   net/minecraft/client/render/entity/EntityRenderDispatcher  field_4833   D
accessible  field   net/minecraft/client/render/entity/EntityRenderDispatcher  field_4834   D
accessible  field   net/minecraft/client/render/entity/EntityRenderDispatcher  field_4835   D
accessible  field   net/minecraft/client/render/entity/EntityRenderDispatcher  field_4838   Z
accessible  method  net/minecraft/client/render/BuiltChunkStorage   getRenderedChunk    (Lnet/minecraft/util/math/BlockPos;)Lnet/minecraft/class_1111;
accessible  field   net/minecraft/client/MinecraftClient    session Lnet/minecraft/client/util/Session;
mutable  field   net/minecraft/client/MinecraftClient    session Lnet/minecraft/client/util/Session;
accessible  field   net/minecraft/client/resource/ResourcePackLoader$class_1263    resourcePack   Ljava/io/File;
accessible  field   net/minecraft/client/font/TextRenderer  fontTexture Lnet/minecraft/util/Identifier;
accessible  field   net/minecraft/client/font/TextRenderer field_2824  F
accessible  field   net/minecraft/client/font/TextRenderer field_2823  F
accessible  field   net/minecraft/client/gui/hud/PlayerListHud field_2988  Lnet/minecraft/text/Text;
accessible  field   net/minecraft/client/gui/hud/PlayerListHud field_2987  Lnet/minecraft/text/Text;
accessible  field   net/minecraft/client/gui/screen/ingame/BookEditScreen  field_3441   I
accessible  field   net/minecraft/client/gui/screen/ingame/BookEditScreen  field_3442   Lnet/minecraft/nbt/ListTag;
accessible  method  net/minecraft/client/gui/screen/ingame/ContainerScreen  method_2903 (Lnet/minecraft/container/Slot;III)V
accessible  field   net/minecraft/client/gl/JsonGlProgram  name Ljava/lang/String;
accessible  field   net/minecraft/client/render/GameRenderer   forcedShaderIndex I
accessible  method   net/minecraft/client/render/GameRenderer   loadShader    (Lnet/minecraft/util/Identifier;)V
accessible  field   net/minecraft/client/gl/ShaderEffect   passes    Ljava/util/List;
accessible  method  net/minecraft/client/render/chunk/ChunkBuilder method_3782 (Lnet/minecraft/client/render/BufferBuilder;Lnet/minecraft/client/network/ClientRemotePlayerEntity;)V
accessible  method  net/minecraft/client/render/chunk/ChunkBuilder  method_3781 (Lnet/minecraft/client/render/BufferBuilder;ILnet/minecraft/class_1111;)V
accessible  field   net/minecraft/client/render/chunk/ChunkBuilder field_4734  Ljava/util/Queue;
accessible  field   net/minecraft/class_1111    field_4764  Lnet/minecraft/world/World;
accessible  method  net/minecraft/class_1111   method_3813 (Lnet/minecraft/client/render/RenderLayer;FFFLnet/minecraft/client/render/BufferBuilder;Lnet/minecraft/class_1108;)V

#Minecraft Client
accessible  field   net/minecraft/client/render/GameRenderer    field_4292  Lnet/minecraft/client/util/SmoothUtil;
accessible  field   net/minecraft/client/render/GameRenderer    field_4293  Lnet/minecraft/client/util/SmoothUtil;
accessible  field   net/minecraft/client/MinecraftClient    assetDirectory  Ljava/io/File;