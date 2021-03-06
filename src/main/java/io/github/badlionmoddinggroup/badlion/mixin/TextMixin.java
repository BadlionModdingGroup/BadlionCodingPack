package io.github.badlionmoddinggroup.badlion.mixin;

import io.github.badlionmoddinggroup.badlion.extra.TextExtra;
import net.minecraft.text.Text;
import org.spongepowered.asm.mixin.Mixin;

import java.util.Date;

@Mixin(Text.class)
public class TextMixin implements TextExtra {

    private Date date = new Date();

    @Override
    public Date getDate() {
        return date;
    }

    @Override
    public void setDate(Date date) {
        this.date = date;
    }
}
